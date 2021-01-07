<?php

namespace App\Services;
use App\UserCSV;
use App\FactuurCSV;


class moneyBirdService 
{

    public static function addUserCsv($file){ 
              //get file
              $upload= $file;
              $filePath=$upload->getRealPath();
              //open and read
              $file=fopen($filePath, 'r');
    
              $header= fgetcsv($file);
    
              $escapedHeader=[];
              //validate
              foreach ($header as $key => $value) {
                  array_push($escapedHeader, $value);
              }
              //looping through othe columns
              while($columns=fgetcsv($file))
              {
                if($columns[0]=="")
                {
                    continue;
                }
    
               $data= array_combine($escapedHeader, $columns);
    
    
               // Table update
               $id=$data['id'];
               $first_name=$data['first_name'];
               $last_name=$data['last_name'];
               $username=$data['username'];
               $email=$data['email'];
               $password=$data['password'];
               $phone=$data['phone'];
               $country=$data['country'];
               $date_of_birth=$data['date_of_birth'];
               $role_id=$data['role_id'];
               $status=$data['status'];
               $gender=$data['gender'];
               $avatar=$data['avatar'];
               $google=$data['google'];
               $facebook=$data['facebook'];
               $twitter=$data['twitter'];
               $linkedin=$data['linkedin'];
               $skype=$data['skype'];
               $dribbble=$data['dribbble'];
               $remember_token=$data['remember_token'];
               $no_bkr=$data['no_bkr'];
               $company_name=$data['company_name'];
               $image=$data['image'];
               $company_start_date=$data['company_start_date'];
               $no_kvk=$data['no_kvk'];
               $postcode=$data['postcode'];
               $street=$data['street'];
               $city=$data['city'];
               $province=$data['province'];
               $house_number=$data['house_number'];
               $slug=$data['slug'];
               $created_at=$data['created_at'];
               $updated_at=$data['updated_at'];
               $deleted_at=$data['deleted_at'];
               $creater_id=$data['creater_id'];
               $attempts=$data['attempts'];
               $accountmanager=$data['accountmanager'];
               $bellijst=$data['bellijst'];
               $employee=$data['employee'];
               $email_status=$data['email_status'];
               $private_email=$data['private_email'];
               $private_phone=$data['private_phone'];
               $overhead=$data['overhead'];
    
               $budget= new UserCSV();
               $budget->id=$id;
               $budget->first_name=$first_name;
               $budget->last_name=$last_name;
               $budget->username=$username;
               $budget->email=$email;
               $budget->password=$password;
               $budget->phone=$phone;
               $budget->country=$country;
               $budget->date_of_birth=$date_of_birth;
               $budget->role_id=$role_id;
               $budget->status=$status;
               $budget->gender=$gender;
               $budget->avatar=$avatar;
               $budget->google=$google;
               $budget->facebook=$facebook;
               $budget->twitter=$twitter;
               $budget->linkedin=$linkedin;
               $budget->skype=$skype;
               $budget->dribbble=$dribbble;
               $budget->remember_token=$remember_token;
               $budget->no_bkr=$no_bkr;
               $budget->company_name=$company_name;
               $budget->image=$image;
               $budget->company_start_date=$company_start_date;
               $budget->no_kvk=$no_kvk;
               $budget->postcode=$postcode;
               $budget->street=$street;
               $budget->city=$city;
               $budget->province=$province;
               $budget->house_number=$house_number;
               $budget->slug=$slug;
               $budget->created_at=$created_at;
               $budget->updated_at=$updated_at;
               $budget->deleted_at=$deleted_at;
               $budget->creater_id=$creater_id;
               $budget->attempts=$attempts;
               $budget->accountmanager=$accountmanager;
               $budget->bellijst=$bellijst;
               $budget->employee=$employee;
               $budget->email_status=$email_status;
               $budget->private_email=$private_email;
               $budget->private_phone=$private_phone;
               $budget->overhead=$overhead;
               $budget->save();
            }
            echo "file uploaded";            
            }

     public static function addInvoiceCsv($file){ 
                //get file
                $upload= $file;
                $filePath=$upload->getRealPath();
                //open and read
                $file=fopen($filePath, 'r');
      
                $header= fgetcsv($file);
      
                $escapedHeader=[];
                //validate
                foreach ($header as $key => $value) {
                    array_push($escapedHeader, $value);
                }
                //looping through othe columns
                while($columns=fgetcsv($file))
                {
                  if($columns[0]=="")
                  {
                      continue;
                  }
      
                 $data= array_combine($escapedHeader, $columns);
      
      
                 // Table update
                // Table update
                $id=$data['id'];
                $purchase_id=$data['purchase_id'];
                $status=$data['status'];
                $created_at=$data['created_at'];
                $updated_at=$data['updated_at'];
                $user_id=$data['user_id'];
                $product_id=$data['product_id'];
                $product_title=$data['product_title'];
                $profit=$data['profit'];
                $accountmanager_id=$data['accountmanager_id'];
                $invoice_status=$data['invoice_status'];
                $moneybird_invoice_id=$data['moneybird_invoice_id'];
                $bank=$data['bank'];
                $company_id=$data['company_id'];

                $budget= new FactuurCSV();
                $budget->id=$id;
                $budget->purchase_id=$purchase_id;
                $budget->status=$status;
                $budget->created_at=$created_at;
                $budget->updated_at=$updated_at;
                $budget->user_id=$user_id;
                $budget->product_id=$product_id;
                $budget->product_title=$product_title;
                $budget->profit=$profit;
                $budget->accountmanager_id=$accountmanager_id;
                $budget->invoice_status=$invoice_status;
                $budget->moneybird_invoice_id=$moneybird_invoice_id;
                $budget->bank=$bank;
                $budget->company_id=$company_id;
                $budget->save();
                }
                echo "file uploaded";            
                }

}
