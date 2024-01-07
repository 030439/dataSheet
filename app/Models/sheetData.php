<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheetData extends Model
{
    use HasFactory;
    protected $fillable = ["Ticket_Id", "Time", "Action", "Type", "Type_Detail", "Account", "Parent", "Amount", "Script", "Price", "Close_Price", "Total_PnL", "SL", "TP", "Open_Position", "Open_Date", "Time_Diff", "Created_By", "Comment", "IP", "Script_Description", "Expiry_Date", "Method", "Contract_Size"];

}
