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
    }
}
