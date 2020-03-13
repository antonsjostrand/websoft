using System;
using System.Collections.Generic;
using Microsoft.AspNetCore.Mvc;
using accountApplication.Models;
using accountApplication.Services;
using System.Text.Json;
using System.Linq;

namespace accountApplication.Controllers
{
    [ApiController]
    [Route("api/")]
    public class AccountController : ControllerBase
    {
        public AccountController(JsonFileAccountService accountService)
        {
            AccountService = accountService;
        }

        public JsonFileAccountService AccountService { get; }

        [Route("accounts")]
        [HttpGet]
        public IEnumerable<Account> Get()
        {
            return AccountService.GetAccounts();
        }

        [Route("account/{id:int}")]
        [HttpGet]
        public string GetAccount(int id){         

            foreach(Account account in AccountService.GetAccounts()){
                if(account.Number == id){
                    return JsonSerializer.Serialize(account);
                }
            }

            return "Error: Account with ID: " + id + " doesn't exist..";
        }

        [Route("account/{id:int}/transfer")]
        [HttpPut]
        public string transferMoney(int id, string targetId, string amount){

           return AccountService.transferMoney(id, targetId, amount);
        }

        [Route("account")]
        [HttpPost]
        public String transferMoneyForm([FromForm]TransferForm transferForm){

            return AccountService.transferMoney(transferForm.originAccount, transferForm.targetAccount, transferForm.amount);
        }
    }
}
