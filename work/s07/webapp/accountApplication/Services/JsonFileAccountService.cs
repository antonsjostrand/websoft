using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text.Json;
using System.Text.Json.Serialization;
using Microsoft.AspNetCore.Hosting;
using accountApplication.Models;

namespace accountApplication.Services
{
    public class JsonFileAccountService
    {
        public JsonFileAccountService(IWebHostEnvironment webHostEnvironment)
        {
            WebHostEnvironment = webHostEnvironment;
        }

        public IWebHostEnvironment WebHostEnvironment { get; }

        private string JsonFileName
        {
            get { return Path.Combine(WebHostEnvironment.WebRootPath, "data", "account.json"); }
        }

        public IEnumerable<Account> GetAccounts()
        {
            using (var jsonFileReader = File.OpenText(JsonFileName))
            {
                return JsonSerializer.Deserialize<Account[]>(jsonFileReader.ReadToEnd(),
                    new JsonSerializerOptions
                    {
                        PropertyNameCaseInsensitive = true
                    });
            }
        }

        public void SaveAccounts(IEnumerable<Account> accounts){

            using (var jsonFileReader = File.Open(JsonFileName, FileMode.Create))
            {
                JsonSerializer.Serialize<IEnumerable<Account>>(
                    new Utf8JsonWriter (
                        jsonFileReader,
                        new JsonWriterOptions {
                            SkipValidation = true,
                            Indented = true
                        }
                    ),
                    accounts
                );
            }
        }

        public string transferMoney(int id, string targetId, string amount){

            bool originExists = false;
            bool targetExists = false;
            var accounts = GetAccounts();

            foreach(Account account in accounts){
                if(account.Number == id){
                    originExists = true;
                }
                if(account.Number == Int32.Parse(targetId)){
                    targetExists = true;
                }
            }

            if(!originExists){
                return "Account to move money from doesn't exist.";
            }

            if(!targetExists){
                return "Account to move money to doesn't exist.";
            }

            foreach(Account account in accounts){
                if(account.Number == Int32.Parse(targetId)){
                    account.Balance += Int32.Parse(amount);
                    
                }                
                if(account.Number == id){
                    account.Balance -= Int32.Parse(amount);
                }
            }

            SaveAccounts(accounts);
            return "Successfully moved money from account: " + id + " to account: " + targetId;
        }

    }
}
