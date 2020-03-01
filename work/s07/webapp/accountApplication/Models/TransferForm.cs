using System;
using System.Collections.Generic;
using System.Text.Json;

namespace accountApplication.Models
{
    public class TransferForm
    {
        public string targetAccount { get; set; }
        public int originAccount { get; set; }
        public string amount { get; set; }
        
        public override string ToString() =>
            JsonSerializer.Serialize<TransferForm>(this);
    }
}