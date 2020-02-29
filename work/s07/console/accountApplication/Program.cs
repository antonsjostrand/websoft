using System;
using System.IO;
using System.Text.Json;
using System.Collections.Generic;
using System.Text.Json.Serialization;

namespace accountApplication
{
    class Program
    {

        static void Main(string[] args)
        {

            AccountInteractor.startUp();

            bool appIsRunning = true;
            Console.Clear();

            while(appIsRunning){
                appIsRunning = showMenu();
            }

        }

        private static bool showMenu(){
            
            Console.WriteLine("\n+----- Account Handler -----+");
            Console.WriteLine("| 1. View accounts          |");
            Console.WriteLine("| 2. View account by number |");
            Console.WriteLine("| 3. Search                 |");
            Console.WriteLine("| 4. Move                   |");
            Console.WriteLine("| 5. Create account         |");
            Console.WriteLine("| 6. Exit                   |");
            Console.WriteLine("+---------------------------+");

            Console.Write("Enter choice >> ");
            switch (Console.ReadLine()){
                case "1":
                    AccountInteractor.viewAccounts();
                    return true;
                case "2":
                    AccountInteractor.viewAccountById();
                    return true;
                case "3":
                    AccountInteractor.searchAccount();
                    return true;
                case "4":
                    AccountInteractor.moveMoney();
                    return true;
                case "5":
                    AccountInteractor.createNewAccount();
                    return true;
                case "6":
                    return false;
                default:
                    return true;
            }
        }

    }
}
