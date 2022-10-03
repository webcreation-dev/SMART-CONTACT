<?php

use App\Models\User;


function getQrCode($smart_contact_id) {

    $user = User::where("id", $smart_contact_id)->first();
    
    $info = QRCode::meCard("".$user->name."", "".$user->service1."", "".$user->numberPhone."", "".$user->email."")
                    ->setSize(3)
                    ->svg();
    return $info;
}
