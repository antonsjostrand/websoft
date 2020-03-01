using System;
using System.Collections.Generic;
using Microsoft.AspNetCore.Mvc;
using accountApplication.Models;
using accountApplication.Services;
using System.Text.Json;

namespace accountApplication.Controllers
{
    [ApiController]
    [Route("api/[controller]")]
    public class AccountsController : ControllerBase
    {
        public AccountsController(JsonFileAccountService accountService)
        {
            AccountService = accountService;
        }

        public JsonFileAccountService AccountService { get; }

        [Route("")]
        [HttpGet]
        public IEnumerable<Account> Get()
        {
            return AccountService.GetAccounts();
        }

        [Route("{id:int}")]
        [HttpGet]
        public string GetAccount(int id){         

            foreach(Account account in AccountService.GetAccounts()){
                if(account.Number == id){
                    return JsonSerializer.Serialize(account);
                }
            }

            return "Error: Account with ID: " + id + " doesn't exist..";
        }

        [Route("{id:int}/transfer")]
        [HttpPut]
        public string transferMoney(int id, string targetId, string amount){

            bool originExists = false;
            bool targetExists = false;
            var accounts = AccountService.GetAccounts();

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

            AccountService.SaveAccounts(accounts);
            return "Successfully moved money from account: " + id + " to account: " + targetId;
        }
    }
}
