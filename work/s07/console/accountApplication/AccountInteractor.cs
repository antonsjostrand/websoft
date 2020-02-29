using System;
using System.IO;
using System.Text.Json;
using System.Collections.Generic;

namespace accountApplication{

    public class AccountInteractor {

        public static String filePath = "../data/account.json";
        public static List<Account> accounts;

        public static void startUp(){
            accounts = readData();
        }

        public static List<Account> readData(){

            using (StreamReader r = new StreamReader(filePath))
            {
                string data = r.ReadToEnd();

                var json = JsonSerializer.Deserialize<List<Account>>(
                    data,
                    new JsonSerializerOptions {
                        PropertyNameCaseInsensitive = true
                    }
                );

                return json;
            }
        }
        public static void saveData(){

            using (var outputStream = File.Open(filePath, FileMode.Create))
            {
                JsonSerializer.Serialize<List<Account>>(
                    new Utf8JsonWriter (
                        outputStream,
                        new JsonWriterOptions {
                            SkipValidation = true,
                            Indented = true
                        }
                    ),
                    accounts
                );
            }
        }

        public static void viewAccounts(){

            Console.WriteLine("\n+---------- View Accounts -----------+");
            Console.WriteLine("| Number | Balance |  Label  | Owner |");
            Console.WriteLine("|------------------------------------|");
            
            foreach (Account account in accounts){
                Console.WriteLine(buildAccountString(account));
            }
            Console.WriteLine("+------------------------------------+");
            
        }

        public static void viewAccountById(){

            Console.Write("Enter the account number to view >> ");
            var accountNumber = Console.ReadLine();
            Console.WriteLine("\n+----------- View Account -----------+");
            Console.WriteLine("| Number | Balance |  Label  | Owner |");
            Console.WriteLine("|------------------------------------|");

            foreach (Account account in accounts){
                if (accountNumber == account.Number.ToString()){
                    Console.WriteLine(buildAccountString(account));
                    break;
                }
            }
            Console.WriteLine("+------------------------------------+");
              
        }

        public static void searchAccount(){
            
            Console.Write("Enter the string to search for >> ");
            var searchString = Console.ReadLine();

            Console.WriteLine("\n+---------- Search Account ----------+");
            Console.WriteLine("| Number | Balance |  Label  | Owner |");
            Console.WriteLine("|------------------------------------|");

            foreach (Account account in accounts){
                if(account.Number.ToString().Equals(searchString)){
                    Console.WriteLine(buildAccountString(account));
                    continue;
                }
                if(account.Label.Contains(searchString)){
                    Console.WriteLine(buildAccountString(account));
                    continue;
                }
                if (account.Owner.ToString().Equals(searchString)){
                    Console.WriteLine(buildAccountString(account));
                    continue;
                }
            }

            Console.WriteLine("+------------------------------------+");

        }

        public static void moveMoney(){

            bool movedMoney = false;

            Console.Write("From which account do you want to move money >> ");
            var moveAccountNumber = Console.ReadLine();

            Console.Write("To which account do you want to move money >> ");
            var targetAccountNumber = Console.ReadLine();

            Console.Write("How much would you like to move >> ");
            var amount = Console.ReadLine();

            foreach(Account account in accounts) {
                if (account.Number.ToString().Equals(moveAccountNumber)){
                    if(Int32.Parse(amount) <= account.Balance){
                    account.Balance -= Int32.Parse(amount);
                    movedMoney = true;
                    }else {
                        Console.WriteLine("Entered amount exceeds the accounts amount.");
                        break;
                    }
                }
            }

            if(movedMoney){
                foreach(Account account in accounts) {
                    if (account.Number.ToString().Equals(targetAccountNumber)){
                        account.Balance += Int32.Parse(amount);
                    }
                }
                AccountInteractor.saveData();
            }
        }

        public static void createNewAccount(){

            Console.Write("Entered the desired account number >> ");
            var newAccountNumber = Console.ReadLine();

            Console.Write("Enter the amount you want deposit >> ");
            var newAccountBalance = Console.ReadLine();

            Console.Write("Enter the label of your new account >> ");
            var newLabel = Console.ReadLine();

            Console.Write("Enter the owner in numbers >> ");
            var newOwner = Console.ReadLine();

            foreach(Account account in accounts){
                if (account.Number.ToString().Equals(newAccountNumber)){
                    Console.WriteLine("Account number already exists.");
                    return;
                }
            }

            Account newAccount = new Account(Int32.Parse(newAccountNumber), Int32.Parse(newAccountBalance), newLabel, Int32.Parse(newOwner));

            accounts.Add(newAccount);
            saveData();

        }

        public static String buildAccountString(Account account){
            String accountString = "";
            String number = "";
            String balance = "";
            String label = "";
            String owner = "";

            number = "| " + account.Number;
            if(number.Length < 9){
                String append = new String(' ', 9 - number.Length);
                number += append + "|";
            }else {
                number += "|";
            }

            balance = " " + account.Balance;
            if (balance.Length < 9){
                String append = new String(' ', 9 - balance.Length);
                balance += append + "|";
            }else {
                balance += "|";
            }

            label = " " + account.Label;
            if (label.Length < 9){
                String append = new String(' ', 9 - label.Length);
                label += append + "|";
            }else {
                label += "|";
            }

            owner = " " + account.Owner;
            if (owner.Length < 8){
                String append = new String(' ', 7 - owner.Length);
                owner += append + "|";
            }else {
                owner += "|";
            }

            accountString = number + balance + label + owner;
            return accountString;

        }
    
    }


}
