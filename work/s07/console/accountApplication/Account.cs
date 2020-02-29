using System;
using System.Text.Json;

namespace accountApplication {

public class Account{

    public int Number { get; set; }
    public int Balance { get; set; }
    public string Label { get; set; }
    public int Owner { get; set; }

    public Account(){
        
    }

    public Account(int number, int balance, string label, int owner){
        Number = number;
        Balance = balance;
        Label = label;
        Owner = owner;
    }

    public override string ToString() {
        return JsonSerializer.Serialize<Account>(this);
    }

}
}