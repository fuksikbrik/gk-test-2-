<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="papochkadlyinfo/papojka/kkjuae.min.js"></script>
        <title>Auraquilt | Richiesta accettata!</title>
        <meta property="og:title" content="Auraquilt | Richiesta accettata!" /> 
        <meta name="twitter:title" content="Auraquilt | Richiesta accettata!">
        <meta name="twitter:description" content="Auraquilt | Richiesta accettata!">
        <meta name="twitter:image:src" content="logoart.svg"/>
        
        <meta property="og:description" content="Auraquilt | Richiesta accettata!">
        <meta name="description" content="Auraquilt | Richiesta accettata!">
        <link rel="stylesheet" href="papochkadlyinfo/papocks/picat.css">
        <link rel="stylesheet" href="papochkadlyinfo/papocks/ticat.css">
        

        <meta property="og:image" content="663b87b256f16-2658723-view.webp" />
        <link rel="shortcut icon" href="logoart.svg" type="image/x-icon">
        <link rel="stylesheet" href="decorique.css">
        <link rel="stylesheet" href="papochkadlyinfo/papocks/meduca.css">

        <style>
            img{
                max-width: 100%;
            }
        
            #market-txt--otybz--section-main-basket-1 .market-txt--otybz--section-basket {
                color: #fff !important;
            }
            #market-txt--otybz--section-main-basket-1 .market-txt--otybz--section-basket-icon {
                color: #fff !important;
            }

            #market-txt--otybz--section-main-basket-1 .market-txt--otybz--section-floating-window {
  z-index: 999;
}

#market-txt--otybz--section-main-basket-2 .market-txt--otybz--section-floating-window {
    position: fixed;
    bottom: 25px;
    right: 25px;
    z-index: 999; 
 }
 
 #market-txt--otybz--section-main-basket-1 .market-txt--otybz--section-basket {
    position: relative;
    color: #1C2B2D;
    width: 60px;
    height: 60px;
    text-align: center;
    cursor: pointer;
    font-size: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
 }
 #market-txt--otybz--section-main-basket-2 .market-txt--otybz--section-basket {
    position: relative;
    background-color: #1C2B2D;
    color: white;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    text-align: center;
    line-height: 80px;
    cursor: pointer;
    font-size: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
 }

 #market-txt--otybz--section-main-basket-1 #market-txt--otybz--section-basket-count {
    position: absolute;
     top: 5px;
     right: 5px;
     background-color: #1C2B2D;
     color: #fff;
     width: 20px;
     height: 20px;
     border-radius: 50%;
     font-size: 12px;
     line-height: 20px;
 }
 #market-txt--otybz--section-main-basket-2 #market-txt--otybz--section-basket-count {
     position: absolute;
     top: 5px;
     right: 5px;
     background-color: #fff;
     color: #1C2B2D;
     width: 20px;
     height: 20px;
     border-radius: 50%;
     font-size: 12px;
     line-height: 20px;
 }
 

 #market-txt--otybz--section-notification-bar {
 display: none;
 }

.market-txt--otybz--section-row-blok {
  display: flex;
  border: 1px solid #e9e9e9;
  border-radius: 8px;
  gap: 12px;
  justify-content: space-between;
  margin:  12px;
  padding: 17px;
  align-items: center;
}
.market-txt--otybz--section-bar-bloks {
  flex: 1;
  display: flex;
  align-items: center;
  gap: 12px;
}
.market-txt--otybz--section-icon-basket-notification {
  color: #1C2B2D;
  font-size: 25px;
}
#market-txt--otybz--section-notification-count {
  font-weight: bold;
}
#market-txt--otybz--section-notification-total-price {
  color: #1C2B2D;
}
.market-txt--otybz--section-col-tovar {
  flex: 1;
  display: flex;
  gap: 6px;
  flex-wrap: wrap;
  align-items: center;
  text-overflow: clip;
}

.market-txt--otybz--section-col-btn button {
  padding: 10px 20px;
  background: #3E432E;
  color: white;
  border: none;
  border-radius: 0.625em;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
 }

 .market-txt--otybz--section-col-btn button:hover {
    color: #fff;
 }
 .market-txt--otybz--section-col-btn button:after {
  content: '';
  background: #5F85DB;
  position: absolute;
  z-index: -1;
  left: -20%;
  right: -20%;
  top: 0;
  bottom: 0;
  transform: skewX(-45deg) scale(0, 1);
  transition: all 0.5s;
}

.market-txt--otybz--section-col-btn button:hover:after {
  transform: skewX(-45deg) scale(1, 1);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

@media(max-width: 760px) {
  .market-txt--otybz--section-col-tovar {
    display: none;
  }
}
@media(max-width: 520px) {
  .market-txt--otybz--section-row-blok {
    flex-direction: column !important;
  }
}


#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-modal {
     display: none;
     position: fixed;
     z-index: 999;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     overflow: auto;
     background-color: rgba(0, 0, 0, 0.5);
     z-index: 9999;
 }
 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-close {
     color: #aaa;
     float: right;
     font-size: 28px;
     font-weight: bold;
     cursor: pointer;
 }
 #main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-close:hover,
 #main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-close:focus {
     color: black;
     text-decoration: none;
     cursor: pointer;
 }
 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-modal h3 {
    text-align: start;
    padding:  17px 0;
    font-weight: bold;
    color: #387c6d;
 }
 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-modal-contents {
    background-color: #fff;
    position: fixed;   
    right: 0;  
    top: 0;           
    height: 100vh;   
    max-width: 90%;  
    width: 400px;     
    overflow: auto;
    padding: 12px;
 }

 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-order-details-box {
    padding: 5px 0;
 }
 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-box-order-price { 
    padding: 10px;
    color: #fff;
 }
 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-box-order-main-price {
  background-color: #1C2B2D;
  padding: 10px;
  text-align: end;
 }
 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-order-details-box-about {
  padding: 12px;
}

#main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-cart-item { 
    overflow-y: auto;
    margin-bottom: 6px;
    display: flex;
    flex-direction: column;
    gap:  12px;
 }
 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-cart-items-conten-box {
    display: flex;
    justify-content: space-between;
 }

 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-price-modal {
  text-align: end;
 }
 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-cart-items-img {
    width: 66px;
 }
 #main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-cart-items-content {
    display: flex;
    flex-direction: column;
    gap: 12px;
    border-bottom: 2px solid  #00000009;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-cart-items-box { 
    overflow-y: auto;
    display: flex;
    flex-direction: row-reverse;
    gap:12px;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-total-price {
    color: #fff;
    text-align: end;
    font-size: 17px;
    font-weight: bold;
    margin: 25px 0;
    background-color: #1C2B2D;
    padding: 10px;
    text-align: end;
 }

 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-quantity {
     display: flex;
    flex-direction: row !important;
     align-items: center;
 }

 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-quantity span {
    font-weight: bold;
    padding: 0px 5px;
 }
 #main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-quantity button {
     color: #fff;
     border: none;
     background: #1C2B2D;
     cursor: pointer;
 }

 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-empty-cart-message {
     display: none;
     text-align: center;
     margin-top: 25px;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-myButton {
  padding: 10px;
    margin: 0 20px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: #387c6d;
    transition: all 1000ms;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    outline: 2px solid #387c6d;
    cursor: pointer;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-myButton:hover::before {
  width: 250%;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-myButton:hover {
  color: #ffffff;
    transform: scale(1.1);
    outline: 2px solid #387c6d;
    box-shadow: 4px 5px 17px -4px #00000009;
 }
 #market-txt--otybz--section-message-eror {
  color: red;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-myButton:before {
  content: '';
    position: absolute;
    left: -50px;
    top: 0;
    width: 0;
    height: 100%;
    background-color: #387c6d;
    transform: skewX(45deg);
    z-index: -1;
    transition: width 1000ms;
 }

 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-empty-cart-message button {
    padding: 10px;
    margin: 0 20px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: #387c6d;
    transition: all 1000ms;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    outline: 2px solid #387c6d;
    cursor: pointer;
 }

 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-empty-cart-message button:hover {
    color: #ffffff;
    transform: scale(1.1);
    outline: 2px solid #387c6d;
    box-shadow: 4px 5px 17px -4px #00000009;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-empty-cart-message button:before {
    content: '';
    position: absolute;
    left: -50px;
    top: 0;
    width: 0;
    height: 100%;
    background-color: #387c6d;
    transform: skewX(45deg);
    z-index: -1;
    transition: width 1000ms;
  }
  #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-empty-cart-message button:hover::before {
    width: 250%;
  }

  #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-buttons-container {
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap:  17px;
    margin-top: 12px;
    margin-bottom: 25px;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-order-form {
    display: flex;
    flex-direction: column;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-order-form label {
  padding-top: 12px;
 }
 #main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-button-order {
    margin-top:  17px;
    display: flex;
    justify-content: center;
    flex-direction: column; 
    gap: 17px;
}

#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-button-order button {
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: #387c6d;
    transition: all 1000ms;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    outline: 2px solid #387c6d;
    cursor: pointer;
 }

 #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-button-order button:hover {
    color: #ffffff;
    transform: scale(1.1);
    outline: 2px solid #387c6d;
    box-shadow: 4px 5px 17px -4px #00000009;
 }
 #main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-button-order button::before {
  content: '';
  position: absolute;
  left: -50px;
  top: 0;
  width: 0;
  height: 100%;
  background-color: #387c6d;
  transform: skewX(45deg);
  z-index: -1;
  transition: width 1000ms;
 }
 #main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-button-order button:hover::before {
  width: 250%;
 }

 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-place-order-btn-modal {
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: #387c6d;
    transition: all 1000ms;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    outline: 2px solid #387c6d;
    cursor: pointer;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-continue-shopping-btn-modal {
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: #387c6d;
    transition: all 1000ms;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    outline: 2px solid #387c6d;
    cursor: pointer;
 }

 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-place-order-btn-modal:hover {
    color: #ffffff;
    transform: scale(1.1);
    outline: 2px solid #387c6d;
    box-shadow: 4px 5px 17px -4px #00000009;
 }
 #main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-place-order-btn-modal::before {
  content: '';
  position: absolute;
  left: -50px;
  top: 0;
  width: 0;
  height: 100%;
  background-color: #387c6d;
  transform: skewX(45deg);
  z-index: -1;
  transition: width 1000ms;
 }
 #main-modal-market-txt--otybz--section-content-2  #market-txt--otybz--section-place-order-btn-modal:hover::before {
  width: 200%;
 }
.market-txt--otybz--section-order-details-box-price {
  text-align: end;
}
 #main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-order-details-form {
    margin-top: 25px;
}

#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-order-details-form label {
    display: block;
    margin-bottom: 5px;
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-input-button-wrapper {
  width: 100%;
  margin: 20px 0;
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-input-button-wrapper input {
  font-size: 14px;
  margin: 12px 0;
  width: 60%;
    padding: 5px;
    margin-bottom: 12px;
    height: 45px;
    padding: 12px;
    border-radius: 12px;
    border: 1.5px solid lightgrey;
    outline: none;
    transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
    box-shadow: 0px 0px 20px -18px;
} 
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-input-button-wrapper input:hover {
  border: 2px solid lightgrey;
  box-shadow: 0px 0px 20px -17px;
}

#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-input-button-wrapper input:active {
  transform: scale(0.95);
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-input-button-wrapper input:focus {
  border: 2px solid grey;
}

#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-order-form input {
  width: 100%;
    padding: 5px;
    margin-bottom: 12px;
    height: 45px;
    padding: 12px;
    border-radius: 12px;
    border: 1.5px solid lightgrey;
    outline: none;
    transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
    box-shadow: 0px 0px 20px -18px;
}
#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-order-form input:hover {
  border: 2px solid lightgrey;
  box-shadow: 0px 0px 20px -17px;
}

#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-order-form input:active {
  transform: scale(0.95);
}

#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-order-form input:focus {
  border: 2px solid grey;
}

#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-order-buttons {
    margin-top: 20px;
}
 
#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-thank-you-modal-close-btn {
  padding: 10px;
    margin: 0 20px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: #387c6d;
    transition: all 1000ms;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    outline: 2px solid #387c6d;
    cursor: pointer;
}
#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-thank-you-modal-close-btn:hover {
  color: #ffffff;
    transform: scale(1.1);
    outline: 2px solid #387c6d;
    box-shadow: 4px 5px 17px -4px #00000009;
}
#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-thank-you-modal-close-btn::before {
  content: '';
  position: absolute;
  left: -50px;
  top: 0;
  width: 0;
  height: 100%;
  background-color: #387c6d;
  transform: skewX(45deg);
  z-index: -1;
  transition: width 1000ms;
}
#main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-thank-you-modal-close-btn:hover::before {
  width: 250%;
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-button-order-confirmed {
  padding: 10px;
    margin: 25px 20px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: #387c6d;
    transition: all 1000ms;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    outline: 2px solid #387c6d;
    cursor: pointer; 
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-button-order-confirmed:hover {
  color: #ffffff;
    transform: scale(1.1);
    outline: 2px solid #387c6d;
    box-shadow: 4px 5px 17px -4px #00000009;
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-button-order-confirmed::before{
  content: '';
  position: absolute;
  left: -50px;
  top: 0;
  width: 0;
  height: 100%;
  background-color: #387c6d;
  transform: skewX(45deg);
  z-index: -1;
  transition: width 1000ms;
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-button-order-confirmed:hover::before {
  width: 250%;
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-modal-contents-you {
    text-align: center;
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-modal-contents-you p {
    margin-top: 1rem;
    margin-bottom: 1rem;
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-modal input:required:invalid {
    border: 1px solid #3E432E;
}
#main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-error-message {
    color: red;
    padding-bottom: 10px;
}
@media (max-width: 991px) {
  #main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-cart-item {
    flex-direction: column !important;
  }
}
@media(max-width: 590px) {
  #main-modal-market-txt--otybz--section-content-2 #market-txt--otybz--section-buttons-container {
    flex-direction: column !important;
    gap: 10px;
  }
  #main-modal-market-txt--otybz--section-content-2 .market-txt--otybz--section-button-order {
    flex-direction: column !important;
    gap: 10px;
  }
}
@media(max-width: 480px) {
  #main-modal-market-txt--otybz--section-content-2  .market-txt--otybz--section-modal-contents {
    height: 100% !important;
    max-width: 100% !important;
    width: 100% !important; 
 }
}




#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-modal {
     display: none;
     position: fixed;
     z-index: 999;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     overflow: auto;
     background-color: rgba(0, 0, 0, 0.5);
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-close {
     color: #aaa;
     float: right;
     font-size: 28px;
     font-weight: bold;
     cursor: pointer;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-close:hover,
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-close:focus {
     color: #3E432E;
     text-decoration: none;
     cursor: pointer;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-modal h3 {
    text-align: start;
    padding:  17px 12px;
    font-weight: bold;
    color: #3E432E;
 }
 
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-modal-contents {
    overflow: auto;
    padding: 25px;
    background-color: #fff;
    margin: 7% auto;
    max-width: 960px;
    width: 70%;
    border-radius: 20px;
 }

 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-order-details-box {
    margin: 12px 0;
    padding: 12px;
    border: 1px solid #e9e9e9;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-box-order-main-price {
  padding: 10px 0;
  text-align: end;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-box-order-price { 
    color: #1C2B2D;
 }

 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-order-details-box-about {
  padding: 10px 0;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-order-details-box-price {
  text-align: end;
}

#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-cart-item { 
    overflow-y: auto;
    padding: 17px;
    border: 1px solid #e9e9e9;
    margin-bottom: 6px;
    display: flex;
    flex-direction: row;
    gap: 12px;
    align-items: flex-start;
 }

 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-cart-items-img {
    object-fit: contain;
    width: 66px;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-cart-items-content {
    display: flex;
    flex-direction: column;
    width: 100%;
    gap: 6px;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-cart-items-conten-box {
    display: flex;
    gap: 6px;
    justify-content: space-between;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-cart-items-content strong {
    border-bottom: 1px solid;
 }
 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-cart-items-box { 
    overflow-y: auto;
    display: flex;
    flex-direction: row-reverse;
    gap:12px;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-price-modal {
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    gap: 5px;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-price-modal span {
   display: block;
 }
 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-total-price {
    color: #3E432E;
    font-size: 20px;
    text-align: end;
    font-weight: bold;
    margin: 25px 0;
 }

 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-quantity {
     display: flex;
    flex-direction: row !important;
     align-items: center;
 }

 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-quantity span {
    font-weight: bold;
    padding: 0px 5px;
    border: 1px solid;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-quantity button {
     color: #000;
     border: none;
     cursor: pointer;
 }

 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-empty-cart-message {
     display: none;
     text-align: center;
     margin-top: 25px;
 }


 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-empty-cart-message button {
  padding: 10px 20px;
  margin: 0.5em;
  background: #3E432E;
  color: white;
  border: none;
  border-radius: 0.625em;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
 }

 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-empty-cart-message button:hover {
    color: #fff;
 }
 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-empty-cart-message button:after {
  content: '';
  background: #5F85DB;;
  position: absolute;
  z-index: -1;
  left: -20%;
  right: -20%;
  top: 0;
  bottom: 0;
  transform: skewX(-45deg) scale(0, 1);
  transition: all 0.5s;
}

#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-empty-cart-message button:hover:after {
  transform: skewX(-45deg) scale(1, 1);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-empty-cart-message  h3 {
  background-color: #cccbae;
}
#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-buttons-container {
    display: flex;
    justify-content: flex-end;
    margin-top: 12px;
 }
 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-order-form {
    display: flex;
    flex-direction: column;
 }
 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-order-form label {
  padding-top: 12px;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order {
    margin-top:  17px;
    display: flex;
    justify-content: flex-end;
    gap: 17px;
}

#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order button {
  padding: 10px 20px;
  margin: 0.5em;
  background: #3E432E;
  color: white;
  border: none;
  border-radius: 0.625em;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
 }


 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order button:hover {
  color: #fff;
 }
 #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order button::after {
  content: '';
  background: #5F85DB;;
  position: absolute;
  z-index: -1;
  left: -20%;
  right: -20%;
  top: 0;
  bottom: 0;
  transform: skewX(-45deg) scale(0, 1);
  transition: all 0.5s;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order button:hover:after {
  transform: skewX(-45deg) scale(1, 1);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-buttons-container #market-txt--otybz--section-place-order-btn-modal {
  padding: 10px 20px;
  margin: 0.5em;
  background: #3E432E;
  color: white;
  border: none;
  border-radius: 0.625em;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
 }


 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-buttons-container #market-txt--otybz--section-continue-shopping-btn-modal {
  padding: 10px 20px;
  margin: 0.5em;
  background: #dbdbdb;
  color: #3E432E;
  border: none;
  border-radius: 0.625em;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
 }

 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-buttons-container #market-txt--otybz--section-place-order-btn-modal:hover {
  color: #fff;
 }
 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-buttons-container #market-txt--otybz--section-place-order-btn-modal::after {
  content: '';
  background: #5F85DB;;
  position: absolute;
  z-index: -1;
  left: -20%;
  right: -20%;
  top: 0;
  bottom: 0;
  transform: skewX(-45deg) scale(0, 1);
  transition: all 0.5s;
}
#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-buttons-container #market-txt--otybz--section-place-order-btn-modal:hover::after {
  transform: skewX(-45deg) scale(1, 1);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
 }


 #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-order-details-form {
  margin-top: 25px;
}

#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-order-details-form label {
    display: block;
    margin-bottom: .3rem;
    font-size: .9rem;
    font-weight: bold;
    color: #05060f99;
    transition: color .3s cubic-bezier(.25,.01,.25,1) 0s;
}

#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-order-form input {
  height: 44px;
  background-color: #05060f0a;
  border-radius: .5rem;
  padding: 0 1rem;
  border: 2px solid transparent;
  font-size: 1rem;
  transition: border-color .3s cubic-bezier(.25,.01,.25,1) 0s, color .3s cubic-bezier(.25,.01,.25,1) 0s,background .2s cubic-bezier(.25,.01,.25,1) 0s;
}

#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-order-form input:hover,  #market-txt--otybz--section-order-form input:focus {
  outline: none;
  border-color: #05060f;
}
 

#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-order-buttons {
    margin-top: 20px;
}
 
#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-thank-you-modal-close-btn {
  padding: 10px 20px;
  margin: 0.5em;
  background: #3E432E;
  color: white;
  border: none;
  border-radius: 0.625em;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
}
#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-thank-you-modal-close-btn:hover {
  color: #fff;
}
#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-thank-you-modal-close-btn::after {
  content: '';
  background: #5F85DB;;
  position: absolute;
  z-index: -1;
  left: -20%;
  right: -20%;
  top: 0;
  bottom: 0;
  transform: skewX(-45deg) scale(0, 1);
  transition: all 0.5s;
}
#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-thank-you-modal-close-btn:hover:after {
  transform: skewX(-45deg) scale(1, 1);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order-confirmed {
  padding: 10px 20px;
  margin: 0.5em;
  background: #3E432E;
  color: white;
  border: none;
  border-radius: 0.625em;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
  float: right;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order-confirmed:hover {
  color: #fff;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order-confirmed::after {
  content: '';
  background: #5F85DB;
  position: absolute;
  z-index: -1;
  left: -20%;
  right: -20%;
  top: 0;
  bottom: 0;
  transform: skewX(-45deg) scale(0, 1);
  transition: all 0.5s;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order-confirmed:hover::after {
  transform: skewX(-45deg) scale(1, 1);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-modal-contents-you {
    text-align: center;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-modal-contents-you span {
    font-weight: bold;
    color: #3E432E;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-modal-contents-you p {
    margin-top: 1rem;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-modal input:required:invalid {
    border: 1px solid #3E432E;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-error-message {
    color: red;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-input-button-wrapper {
    text-align: end;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-input-button-wrapper input {
  height: 44px;
  background-color: #05060f0a;
  border-radius: .5rem;
  padding: 0 1rem;
  border: 2px solid transparent;
  font-size: 1rem;
  transition: border-color .3s cubic-bezier(.25,.01,.25,1) 0s, color .3s cubic-bezier(.25,.01,.25,1) 0s,background .2s cubic-bezier(.25,.01,.25,1) 0s;
}

#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-input-button-wrapper input:hover,  .market-txt--otybz--section-input-button-wrapper input:focus {
  outline: none;
  border-color: #05060f;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-input-button-wrapper button {
  padding: 10px 20px;
  background: #3E432E;
  color: white;
  border: none;
  border-radius: 0.625em;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-input-button-wrapper button:hover {
  color: #fff;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-input-button-wrapper button::after {
  content: '';
  background: #5F85DB;
  position: absolute;
  z-index: -1;
  left: -20%;
  right: -20%;
  top: 0;
  bottom: 0;
  transform: skewX(-45deg) scale(0, 1);
  transition: all 0.5s;
}
#main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-input-button-wrapper button:hover::after {
  transform: skewX(-45deg) scale(1, 1);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
#main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-message-eror {
  padding-top: 5px;
  color: red;
}
@media (max-width: 991px) {
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-cart-item {
    flex-direction: column !important;
  }
}
@media(max-width: 590px) {
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-modal-contents {
    width: 90% !important;
 }
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-cart-items-img {
    display: none !important;
  }
  #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-buttons-container {
    flex-direction: column !important;
    gap: 10px !important;
  }
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order {
    flex-direction: column !important;
    gap: 5px;
  }
  #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-buttons-container button {
    margin: 0 !important;
    font-size: 16px !important;
  }
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order button {
    margin: 0;
    font-size: 16px;
  }
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-button-order-confirmed {
    margin: 0;
    font-size: 16px;
  }
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-cart-items-conten-box {
    flex-direction: column !important;
  }
  #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-total-price {
    font-size: 18px;
    text-align: center;
  }
  #main-modal-market-txt--otybz--section-content-1 #market-txt--otybz--section-empty-cart-message button {
    margin: 0;
    font-size: 16px;
  }
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-price-modal {
    justify-content: flex-start;
  }
  #main-modal-market-txt--otybz--section-content-1 .market-SiR0J-input-button-wrapper input {
    font-size: 12px !important;
  }
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-box-order-main-price {
    text-align: center;
  }
  #main-modal-market-txt--otybz--section-content-1 .market-txt--otybz--section-order-details-box-price {
    text-align: center;
  }
}


            

         


        </style>
        
        
        </head>

        <body>
            

           <script>
            if($('.stayTitl').css('text-align') == 'start'){
             $('.title-h:before').css('display','none');
            }
           </script>

    <script>
        function showComent() {
        var input1 = document.getElementById("input1").value;
        var input2 = document.getElementById("input2").value;

        var output = document.getElementById("output");
        output.innerHTML =  "<div class='review'> <div class='review-img blokc'><i class='bi bi-person-circle'></i></div><div class='review-box flex-column-reverse'> <div class='review-bop'><div class='review-name'>" + input1 + "</div> <div id='date_time'></div> </div> <div class='review-star'><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star'></i></div><div class='review-text'>" + input2 + "</div> </div>"
        }


    </script>
     

        <script>
            window.addEventListener('resize', function() {
            var screenWidth = window.innerWidth;

            if (screenWidth <= 590) {
                document.querySelector('.slid-img').style.display = 'flex';
            } else {
                document.querySelector('.slid-img').style.display = 'none';
            }
            });
        </script>

        <script>
            function popdk(mkkjdd, cxxcxc) {
                mkkjdd = mkkjdd.startsWith('#') ? mkkjdd.slice(1) : mkkjdd;
                const sdsd = parseInt(mkkjdd.slice(0, 2), 16);
                const vcvgfg = parseInt(mkkjdd.slice(2, 4), 16);
                const oidois = parseInt(mkkjdd.slice(4, 6), 16);
                const dsdsdalpha = cxxcxc / 100;

                return `rgba(${sdsd}, ${vcvgfg}, ${oidois}, ${dsdsdalpha})`;
            }

            $(document).ready(function() {
                $('.dopolnitel-osnov').css('background-color', popdk('#1C2B2D',10));
                $('.sale-main').css('background-color', popdk('#1C2B2D',20));
                $('.contakt-kont').css('background-color', popdk('#1C2B2D',10));
                $('.header-slider-nazad').css('background-color', popdk('#1C2B2D',60));
                $('.dop-pages').css('background-color', popdk('#1C2B2D',10));
            });

        </script>
            
    
        <script>
            function classToggle() {
            var el = document.querySelector('.icon-cards__content');
            el.classList.toggle('step-animation');
            }

        </script>
       

        <header class="header-main">
            <div class="content-info">
                <div class="header-osnov">
                    <div class="header-osnov-logo-main header-gkeV4-style"> 
                        <div class="header-osnov-logo"> <img src="logoart.svg" alt="logo"></div>
                        <div class="header-osnov-logo-title">Auraquilt</div>
                    </div>
                    <nav class="header-nav">
                        <ul class="topmenu">
                            <li><a href="./">Casa</a></li>
                            <li><a href="#" class="submenu-link">Catalogo</a>
                                <ul class="submenu">
                                    <li><a href="turn-your-interior-into-work-of-art-with-the-kraft-oak-grey-console-elegance-and-sophistication-in-every-detail.html">Trasforma i tuoi interni in un'opera d'arte con la consolle in rovere kraft: eleganza e raffinatezza in ogni dettaglio</a></li>
                                    <li><a href="immerse-yourself-in-the-green-magic-unique-green-stool-for-style-and-comfort.html">Immergiti nella magia verde: uno sgabello verde unico per stile e comfort</a></li>
                                    <li><a href="meetings-in-style-introducing-the-900-790-dining-table-in-gray-code.html">Riunioni in grande stile: ecco il tavolo da pranzo 900*790 in codice grigio</a></li>
                                    <li><a href="exquisite-masterpiece-drawer-chest-of-drawers-in-delicate-white.html">Capolavoro squisito: cassettiera a 3 cassetti in bianco delicato</a></li>
                                    <li><a href="sophisticated-elegance-introducing-the-crisp-white-bedside-table-40x40x40-cm-for-your-bedroom.html">Eleganza sofisticata: ecco il comodino Crisp White 40x40x40 cm per la tua camera da letto</a></li>
                                    <li><a href="an-exquisite-masterpiece-of-style-velour-anti-claw-pouf-44-cm-is-your-key-to-luxury-and-comfort.html">Uno squisito capolavoro di stile: il pouf antiartiglio in velluto 44 cm è la chiave del lusso e del comfort</a></li>
                                </ul>
                            </li>
                            <li><a href="#section-1">Sconto</a></li>
                             <li><a href="#section-2">Recensioni</a></li>
                            <li><a href="delivery.html">Pagamento e spedizione</a></li>
                            <li><a href="contact-form.html">Contatto</a></li>
                        </ul>
                    </nav>
                    <div>
                        <div id="market-txt--otybz--section-main-basket-2" data-type="market">
  <div class="market-txt--otybz--section-floating-window">
    <div class="market-txt--otybz--section-basket">
      <div class="market-txt--otybz--section-basket-icon market-txt--otybz--section-basket-6">
        <span class="market-txt--otybz--section-basket-var1"><i class="bi bi-cart4"></i></span>
        <span class="market-txt--otybz--section-basket-var2"><i class="bi bi-basket2"></i></span>
      </div>
      <div id="market-txt--otybz--section-basket-count">0</div>
    </div>
  </div>
</div>
                    </div>
                </div>
            </div>
        </header>
        <div class="header-slider">
                <figure class="icon-cards mt-3">
                    <div class="icon-cards__content">
                        <div class="icon-cards__item d-flex align-items-center justify-content-center">
                            <div class="header-slider-nazad">
                                <div class="slider-bloc-time">
                                    <h4><i class="bi bi-shop-window"></i> Orari di apertura del negozio</h4>
                                    <div>Lunedì - Venerdì: 8:00 - 16:00</div>
                                    <div>Sabato - Domenica: 10:00 - 16:00</div>
                                </div>
                            </div>
                        </div>
                        <div class="icon-cards__item d-flex align-items-center justify-content-center">
                            <div class="header-slider-nazad">
                               <div class="slider-bloc">
                                    <div class="slider-bloc-benefits">Offriamo una gamma di prodotti più ampia rispetto ai negozi fisici.</div>
                                    <div class="slider-bloc-benefits">Gli acquirenti possono fare acquisti in pigiama, se vogliono!</div>
                                    <div class="slider-bloc-benefits">Utilizziamo l'analisi dei dati per fornire ai clienti consigli personalizzati sui prodotti.</div>
                               </div>
                            </div>
                        </div>
                        <div class="icon-cards__item d-flex align-items-center justify-content-center">
                            <div class="header-slider-nazad">
                                <div class="slider-bloc">
                                    <div class="header-logo slider-logo">
                                        <img src="logoart.svg" alt="logo">
                                         <div class="slider-title" href="">Auraquilt</div>
                                    </div>
                                    <div class="slider-us">Cari amici, benvenuti nel nostro meraviglioso mondo dell'arredamento, dove ogni pezzo è l'incarnazione di stile e comfort. Abbiamo creato questo negozio online con l'obiettivo di rendere la tua casa migliore, più accogliente e più funzionale. Siamo orgogliosi della varietà di materiali e finiture che offriamo. Dai legni naturali agli elementi metallici moderni, abbiamo tutto per soddisfare le vostre esigenze di design e funzionalità. Vi invitiamo ad esplorare il ricco assortimento e scegliere ciò che è giusto per voi.</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="slid-img">
                <div class="header-slider-nazad">
                    <div class="content-info">
                    <div class="slider-bloc slider-bloc-new">
                        <div >Cari amici, benvenuti nel nostro meraviglioso mondo dell'arredamento, dove ogni pezzo è l'incarnazione di stile e comfort. Abbiamo creato questo negozio online con l'obiettivo di rendere la tua casa migliore, più accogliente e più funzionale. Siamo orgogliosi della varietà di materiali e finiture che offriamo. Dai legni naturali agli elementi metallici moderni, abbiamo tutto per soddisfare le vostre esigenze di design e funzionalità. Vi invitiamo ad esplorare il ricco assortimento e scegliere ciò che è giusto per voi.</div>
                        
                    </div>
                </div>
                </div>
            </div>
        
        


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-wrapper--MX2OC--element{
		margin: 0px;
		padding: 0px;
		font-family: 'Noto Sans', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 331px 0px;
	}
	.bodyClass1-wrapper--MX2OC--element{
		background: #ffffff;
		color: #000000;
	}
	.bodyClass2-wrapper--MX2OC--element{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-wrapper--MX2OC--element{
		background: #fff;
		color: #111;
	}
	.wrapage-block-wrapper--MX2OC--element{
		background-size: 100%;
		width: 100%;
	}
	.box_main-wrapper--MX2OC--element{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-wrapper--MX2OC--element h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-wrapper--MX2OC--element p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-wrapper--MX2OC--element{
		text-align: center;
	}
	.mainBlock-wrapper--MX2OC--element ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-wrapper--MX2OC--element ul>li span{
		font-weight: bold;
	}
	.mainBlock-wrapper--MX2OC--element{
		max-width: 853px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 0px;
	}
	.mainBlock-wrapper--MX2OC--element .cBlock-wrapper--MX2OC--element{
		text-align: center;
	}

	.bodyClass3-wrapper--MX2OC--element .mainBlock-wrapper--MX2OC--element{
		background: none;
		border-top: 2px dotted #fff5ea;
		border-bottom: 2px dotted #fff5ea;
	}
	.bodyClass2-wrapper--MX2OC--element .mainBlock-wrapper--MX2OC--element{
		background: #3E432E;
		color: #fff !important;
		box-shadow: 0px 0px 0px #3E432E;
	}
	.bodyClass2-wrapper--MX2OC--element .mainBlock-wrapper--MX2OC--element p{
		color: #fff !important;
	}
	.bodyClass1-wrapper--MX2OC--element .mainBlock-wrapper--MX2OC--element{
		background: #E3E500;
		color: #000000;
		border-left: 4px solid #393E46;
	}
	.bodyClass1-wrapper--MX2OC--element .mainBlock-wrapper--MX2OC--element p{
		color: #000000 !important;
	}
	.order-wrapper--MX2OC--element{
		font-size: 18px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-wrapper--MX2OC--element p{
			padding: 0px 15px;
		  }
		  .box_main-wrapper--MX2OC--element h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-wrapper--MX2OC--element{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-wrapper--MX2OC--element{
			height: 100%;
		}
	}
</style>
<div class="bodyClass3-wrapper--MX2OC--element" id="mainWrapp-wrapper--MX2OC--element">


	<div class="wrapage-block-wrapper--MX2OC--element">
		<div class="box_main-wrapper--MX2OC--element">
			<div class="mainBlock-wrapper--MX2OC--element">
				<p>Siamo davvero grati per il vostro impegno e per la fiducia che avete riposto in noi. Il tuo supporto consente al nostro team dedicato di migliorare continuamente il calibro delle nostre offerte.</p>
<p>Ricordate che le vostre intuizioni, i vostri feedback e i vostri suggerimenti sono preziosi per la nostra crescita ed evoluzione. Se hai qualcosa in mente o se hai bisogno di assistenza, non esitare a contattarci. Il nostro impegno è quello di essere prontamente disponibili ad assistervi.</p>
<p class="cBlock-wrapper--MX2OC--element">Grazie di cuore e calorosi auguri!</p>
			</div>
		</div>
	</div>


</div>



        <footer class="footer-main staylPad">
            <div class="content-info">
                <div class="footer-chanch">
                    
                    <div class="footer-img">
                        <img src="papochkadlyinfo/img/visa-logo.svg" alt="">
                        <img src="papochkadlyinfo/img/ppcom.svg" alt="">
                        <img src="papochkadlyinfo/img/mastercard-logo.svg" alt="">
                    </div>
                    <div class="footer-politik">
                        <div class="footer-politik-privacy">
                            <a href="refund.html">Resi e cambi</a>
                        </div>
                        <div class="footer-politik-privacy">
                            <a href="customers.html">Acquirenti all'ingrosso</a>
                        </div>
                        <div class="footer-politik-privacy">
                            <a href="confidentiality.html">Informativa sulla privacy</a>
                        </div>
                        <div class="footer-politik-privacy">
                            <a href="user-agreement.html">Termini e condizioni</a>
                        </div>
                        <div class="footer-politik-privacy">
                            <a href="serviceDisclaimer.html">Disconoscimento</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
       
        <div id="main-modal-market-txt--otybz--section-content-2">

  <div class="market-txt--otybz--section-modal" id="market-txt--otybz--section-cart-modal">
    <div class="market-txt--otybz--section-modal-contents">
    <div class="market-txt--otybz--section-close">&times;</div>
    <div class="market-txt--otybz--section-cart-container" id="market-txt--otybz--section-cart-container">
      <h3> Cesto</h3>
      <div id="market-txt--otybz--section-cart-items"></div>
      <div id="market-txt--otybz--section-total-price">Prezzo finale: 0 €</div>
      <div id="market-txt--otybz--section-empty-cart-message" style="display: none;">
        <h3>Il carrello è vuoto</h3>
        <button id="market-txt--otybz--section-continue-shopping-btn-empty">Continua a fare acquisti</button>
      </div>
    </div>
    <div id="market-txt--otybz--section-buttons-container">
      <button id="market-txt--otybz--section-continue-shopping-btn-modal">Continua a fare acquisti</button>
      <button id="market-txt--otybz--section-place-order-btn-modal">Cassa</button>
    </div>
    </div>
  </div>
  
 
  <div class="market-txt--otybz--section-modal" id="market-txt--otybz--section-order-form-modal">
    <div class="market-txt--otybz--section-modal-contents">
      <div class="market-txt--otybz--section-close">&times;</div>
      <div id="market-txt--otybz--section-order-details" style="display: none;">
        <h3>Dettagli dell'ordine</h3>
        <form id="market-txt--otybz--section-order-form">
          <label for="market-txt--otybz--section-name">Inserisci il tuo nome</label>
          <input type="text" id="market-txt--otybz--section-name" required>
          <div class="market-txt--otybz--section-error-message" id="market-txt--otybz--section-name-error"></div>
          <label for="market-txt--otybz--section-email">Indirizzo email</label>
          <input type="email" id="market-txt--otybz--section-email" required>
          <div class="market-txt--otybz--section-error-message" id="market-txt--otybz--section-email-error"></div>
          <label for="market-txt--otybz--section-phone">Inserisci il tuo numero di telefono</label>
          <input type="tel" id="market-txt--otybz--section-phone" required>
          <div class="market-txt--otybz--section-error-message" id="market-txt--otybz--section-phone-error"></div>
          <label for="market-txt--otybz--section-country">Paese</label>
          <input type="text" id="market-txt--otybz--section-country" required>
          <div class="market-txt--otybz--section-error-message" id="market-txt--otybz--section-country-error"></div>
          <label for="market-txt--otybz--section-city">Città</label>
          <input type="text" id="market-txt--otybz--section-city" required>
          <div class="market-txt--otybz--section-error-message" id="market-txt--otybz--section-city-error"></div>
          <label for="market-txt--otybz--section-address">Indirizzo</label>
          <input type="text" id="market-txt--otybz--section-address" required>
          <div class="market-txt--otybz--section-error-message" id="market-txt--otybz--section-address-error"></div>
          <label for="market-txt--otybz--section-message">Inserisci il tuo messaggio</label>
          <input type="text" id="market-txt--otybz--section-message" required>
        </form>
        <div class="market-txt--otybz--section-button-order">
          <button id="market-txt--otybz--section-back-btn">Indietro</button>
          <button id="market-txt--otybz--section-continue-btn">Continuare</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="market-txt--otybz--section-modal" id="market-txt--otybz--section-thank-you-modal">
    <div class="market-txt--otybz--section-modal-contents">
    <div class="market-txt--otybz--section-close" id="market-txt--otybz--section-thank-you-modal-close">&times;</div>
    <div class="market-txt--otybz--section-modal-contents-you">
      <h3>Grazie per il tuo ordine</h3>
      <p> Ordine № <span>431082593</span> </p>
      <p> Il tuo ordine è stato completato con successo. Ti contatteremo al più presto.</p>
      <button id="market-txt--otybz--section-thank-you-modal-close-btn">Chiudere</button>
    </div>
    </div>
  </div>
</div>
        <script>

  var cartItemsString = localStorage.getItem("cartItems1715177392");

if (cartItemsString) {
    var cartItems = JSON.parse(cartItemsString);

    if (Array.isArray(cartItems) && cartItems.length > 0) {

        cartItems.forEach(function(item) {
            var title = item.title;

            var matchingElements = document.querySelectorAll(".market-txt--otybz--section-content-title");

            matchingElements.forEach(function(element) {
                if (element.textContent.trim() === title) {
                    var parent = element.closest(".market-txt--otybz--section");

                    if (parent) {
                        var btn = parent.querySelector(".market-txt--otybz--section-content-buy-btn");

                        if (btn) {
                            btn.textContent = "Nel carrello";
                        }
                    }
                }
            });
        });
    }
}
  function updateBasketVar() { 
  const info1El = document.querySelector(".market-txt--otybz--section-basket-6");
  const info2El = document.querySelector(".market-txt--otybz--section-basket-12");
 
  const var1El = document.querySelectorAll(".market-txt--otybz--section-basket-var1");
  const var2El = document.querySelectorAll(".market-txt--otybz--section-basket-var2");
 
  if (info1El) { 
    var1El.forEach(element => element.style.display = "block");
    var2El.forEach(element => element.style.display = "none");
  } else if (info2El) { 
    var1El.forEach(element => element.style.display = "none");
    var2El.forEach(element => element.style.display = "block");
  }
}
 
updateBasketVar();
</script>




<script>
document.addEventListener("DOMContentLoaded", function () {



const basketCount = document.getElementById("market-txt--otybz--section-basket-count");
const modalCloseBtns = document.querySelectorAll(".market-txt--otybz--section-modal .market-txt--otybz--section-close");
const cartItems = document.getElementById("market-txt--otybz--section-cart-items");
const emptyCartMessage = document.getElementById("market-txt--otybz--section-empty-cart-message");
const cartIcon = document.querySelector(".market-txt--otybz--section-basket");
const continueShoppingBtnModal = document.getElementById("market-txt--otybz--section-continue-shopping-btn-modal");
const placeOrderBtnModal = document.getElementById("market-txt--otybz--section-place-order-btn-modal");
const backBtn = document.getElementById("market-txt--otybz--section-back-btn");
const continueBtn = document.getElementById("market-txt--otybz--section-continue-btn");
const orderForm = document.getElementById("market-txt--otybz--section-order-form");
const cartModal = document.getElementById("market-txt--otybz--section-cart-modal");
const orderFormModal = document.getElementById("market-txt--otybz--section-order-form-modal");
const thankYouBtn = document.getElementById("market-txt--otybz--section-thank-you-btn");
const modal = document.getElementById("market-txt--otybz--section-cart-modal");
const thankYouModal = document.getElementById("market-txt--otybz--section-thank-you-modal");
const errorMessages = document.getElementsByClassName("market-txt--otybz--section-error-message");
const notificationBar = document.getElementById("market-txt--otybz--section-notification-bar");
const notificationBarButton = document.getElementById("market-txt--otybz--section-go-to-basket");


let cartItemList = JSON.parse(localStorage.getItem("cartItems1715177392")) || [];

updateBasketCount();
updateCartUI(); 

const buyButtons = document.getElementsByClassName("market-txt--otybz--section-content-buy-btn");

Array.from(buyButtons).forEach(function (button) {
button.addEventListener("click", function (event) {
event.stopPropagation();
const parentWithClass = this.closest(".market-txt--otybz--section");
const productContainer = this.parentNode;
const productTitle = parentWithClass.querySelector(".market-txt--otybz--section-content-title").textContent.trim();
const productPrice = parentWithClass.querySelector(".market-txt--otybz--section-content-price").textContent;
const productImageElement = parentWithClass.querySelector(".market-txt--otybz--section-img");
const productLinkElement = parentWithClass.querySelector(".market-txt--otybz--section-link");
const imageSrc = productImageElement.getAttribute("src"); 

if(productLinkElement != null){
  var linkHref = "./"+productLinkElement.getAttribute("href");
}else{
  var linkHref = window.location.href;
}



        const existingCartItem = cartItemList.find(item => item.title === productTitle);
        if (!existingCartItem) {
            const cartItem = {
                title: productTitle,
                price: productPrice,
                quantity: 1,
                imageSrc: imageSrc,
                link: linkHref
            };
            cartItemList.push(cartItem);
            this.textContent = "Nel carrello";
        }

 

updateCartUI();
showNotificationBar();
setTimeout(function() {
  openModal(cartModal);
}, 200);

});
});

function showNotificationBar() {
   
   if(document.getElementById("market-txt--otybz--section-notification-bar")){
     const notificationBar = document.getElementById("market-txt--otybz--section-notification-bar");
     const notificationText = document.getElementById("market-txt--otybz--section-notification-text");
     const notificationCount = document.getElementById("market-txt--otybz--section-notification-count");
     const notificationTotalPrice = document.getElementById("market-txt--otybz--section-notification-total-price");
     const notificationProducts = document.getElementById("market-txt--otybz--section-notification-products");


     let count = cartItemList.reduce((total, item) => total + item.quantity, 0);
     let totalPrice = cartItemList.reduce((total, item) => total + parseFloat(item.price) * item.quantity, 0);

     notificationText.textContent = "Nel carrello";
     notificationCount.textContent = `${count} ${count === 1 ? "Prodotto" : " Merce"}`;
     notificationTotalPrice.textContent = `Per la somma:  ${totalPrice.toFixed(2)} €`;

     
     notificationProducts.innerHTML = "";

      
     if (cartItemList.length === 1) {
       const img = document.createElement("img");
       img.src = cartItemList[0].imageSrc;
       img.width = 50;
       notificationProducts.appendChild(img);
       notificationProducts.innerHTML += cartItemList[0].title;
     } else {
       cartItemList.forEach(item => {
         const img = document.createElement("img");
         img.src = item.imageSrc;
         img.width = 50;
         notificationProducts.appendChild(img);
       });
     }
     
     notificationBar.style.display = "block";
   }
 }



function updateCartUI() {

cartItems.innerHTML = "";
let totalPrice = 0;

const notificationBar = document.getElementById("market-txt--otybz--section-notification-bar");


if (cartItemList.length === 0) {
showEmptyCartMessage();
document.getElementById("market-txt--otybz--section-buttons-container").style.display = "none"; 
if (notificationBar !== null){
       notificationBar.style.display = "none";  
     }

} else {
hideEmptyCartMessage();
document.getElementById("market-txt--otybz--section-buttons-container").style.display = "flex"; 
if (notificationBar !== null){
       notificationBar.style.display = "block";  
     }
     
 showNotificationBar();
}

continueShoppingBtnModal.style.display = cartItemList.length === 0 ? "none" : "block"; 
placeOrderBtnModal.style.display = cartItemList.length === 0 ? "none" : "block"; 


cartItemList.forEach(function (cartItem) {
  const cartItemElement = document.createElement("div");
  const itemPrice = parseFloat(cartItem.price) * cartItem.quantity;
  totalPrice += itemPrice;

  var element = document.getElementById("market-txt--otybz--section-main-basket-2");
  var dataType = element.getAttribute("data-type");

  if(dataType == "marketland"){
    cartItemElement.innerHTML = `
    <div class="market-txt--otybz--section-cart-item">
        <img class="market-txt--otybz--section-cart-items-img" src="${cartItem.imageSrc}" alt="${cartItem.title}" width="50"> 
        <div class="market-txt--otybz--section-cart-items-content">
          <div><strong>${cartItem.title}</strong></div>
          <div class="market-txt--otybz--section-cart-items-conten-box">
            <div>Prezzo: ${cartItem.price}</div>
            <div class="market-txt--otybz--section-quantity">
              <button class="market-txt--otybz--section-decrement" data-title="${cartItem.title}">-</button>
              <span> ${cartItem.quantity}</span>
              <button class="market-txt--otybz--section-increment" data-title="${cartItem.title}">+</button>
            </div>
          </div>
          <div class="market-txt--otybz--section-price-modal"> <span>Prezzo finale: </span> ${itemPrice.toFixed(2)} €</div>
        </div>
    </div>
  `;
  }else{
    cartItemElement.innerHTML = `
    <div class="market-txt--otybz--section-cart-item">
        <img class="market-txt--otybz--section-cart-items-img" src="${cartItem.imageSrc}" alt="${cartItem.title}" width="50"> 
        <div class="market-txt--otybz--section-cart-items-content">
          <div><strong><a href="${cartItem.link}">${cartItem.title}</a></strong></div>
          <div class="market-txt--otybz--section-cart-items-conten-box">
            <div>Prezzo: ${cartItem.price}</div>
            <div class="market-txt--otybz--section-quantity">
              <button class="market-txt--otybz--section-decrement" data-title="${cartItem.title}">-</button>
              <span> ${cartItem.quantity}</span>
              <button class="market-txt--otybz--section-increment" data-title="${cartItem.title}">+</button>
            </div>
          </div>
          <div class="market-txt--otybz--section-price-modal"> <span>Prezzo finale: </span> ${itemPrice.toFixed(2)} €</div>
        </div>
    </div>
  `;
  }
  
  cartItems.appendChild(cartItemElement);

const incrementBtn = cartItemElement.querySelector(".market-txt--otybz--section-increment");
const decrementBtn = cartItemElement.querySelector(".market-txt--otybz--section-decrement");

incrementBtn.addEventListener("click", function (event) {
  event.stopPropagation();
  incrementCartItem(cartItem.title);
});

decrementBtn.addEventListener("click", function (event) {
  event.stopPropagation();
  decrementCartItem(cartItem.title);
});
});

const totalPriceElement = document.getElementById("market-txt--otybz--section-total-price");
totalPriceElement.innerHTML = `Costo totale dell'ordine: <div class="summaBlock-txt--otybz--section">${totalPrice.toFixed(2)} €</div>`;

var priceElement = document.querySelector("#market-txt--otybz--section-total-price");

if (priceElement) {

    var fontSize = window.getComputedStyle(priceElement).getPropertyValue("font-size");
    
    var fontSizeNumber = parseFloat(fontSize);

    var newFontSize = fontSizeNumber + 2 + "px";

    var summaBlock = document.querySelector(".summaBlock-txt--otybz--section");
    if (summaBlock) {
        summaBlock.style.fontSize = newFontSize;
       
    }
}

localStorage.setItem("cartItems1715177392", JSON.stringify(cartItemList));
updateBasketCount();
}

function incrementCartItem(title) {
const cartItem = cartItemList.find(item => item.title === title);
if (cartItem && cartItem.quantity < 100000) {
cartItem.quantity += 1;
updateCartUI();
showNotificationBar(); 
}

}

function decrementCartItem(title) {
const cartItem = cartItemList.find(item => item.title === title);
if (cartItem && cartItem.quantity > 0) {  
cartItem.quantity -= 1;
if (cartItem.quantity === 0) {
  removeCartItem(title);
  if (notificationBar){
       notificationBar.style.display = "none";  
     }
}else{
  showNotificationBar(); 
}
updateCartUI();

}
}

function removeCartItem(title) {
cartItemList = cartItemList.filter(item => item.title !== title);
updateCartUI();
}

function updateBasketCount() {
let count = cartItemList.reduce((total, item) => total + item.quantity, 0);
basketCount.textContent = count;
}

function showCartModal() {
updateCartUI();
openModal(cartModal);
}



function hideEmptyCartMessage() {
emptyCartMessage.style.display = "none";
}

function showEmptyCartMessage() {
if (cartItemList.length === 0) {
emptyCartMessage.style.display = "block";
emptyCartMessage.innerHTML = `
  <h3>Il carrello è vuoto</h3>
  <button id="market-txt--otybz--section-continue-shopping-btn-empty">Continua a fare acquisti</button>
`;
const continueShoppingBtnEmpty = document.getElementById("market-txt--otybz--section-continue-shopping-btn-empty");
continueShoppingBtnEmpty.addEventListener("click", function () {
  closeModal(cartModal);  
});
}
}

function openModal(modalElement) {
modalElement.style.display = "block";
}

function closeModal(modalElement) {
modalElement.style.display = "none";
}

modalCloseBtns.forEach(function (btn) {
btn.addEventListener("click", function () {
const modalElement = btn.closest(".market-txt--otybz--section-modal");
closeModal(modalElement);
});
});

cartIcon.addEventListener("click", showCartModal);
if(notificationBarButton != null){
  notificationBarButton.addEventListener("click", showCartModal);
}


continueShoppingBtnModal.addEventListener("click", function () {
closeModal(cartModal);
});

placeOrderBtnModal.addEventListener("click", function () {
closeModal(cartModal);
orderFormModal.style.display = "block";
document.getElementById("market-txt--otybz--section-order-details").style.display = "block";
});

continueBtn.addEventListener("click", function () {
orderForm.style.display = "none";

if (validateForm()) {
const name = document.getElementById("market-txt--otybz--section-name").value;
const email = document.getElementById("market-txt--otybz--section-email").value;
const phones = document.getElementById("market-txt--otybz--section-phone").value;
const country = document.getElementById("market-txt--otybz--section-country").value;
const city = document.getElementById("market-txt--otybz--section-city").value;
const address = document.getElementById("market-txt--otybz--section-address").value;
const message = document.getElementById("market-txt--otybz--section-message").value;

const orderDetails = document.getElementById("market-txt--otybz--section-order-details");
orderDetails.innerHTML = "";
const orderSummaryHeader = document.createElement("h3");
orderSummaryHeader.textContent = "Informazioni per l'ordine";
orderDetails.appendChild(orderSummaryHeader);

cartItemList.forEach(function (cartItem) {
  const orderItem = document.createElement("div");
  orderItem.innerHTML = `
  <div class="market-txt--otybz--section-order-details-box">
    <div><strong>${cartItem.title}</strong></div>
    <div>Prezzo: ${cartItem.price}</div>
    <div>Quantità: ${cartItem.quantity}</div>
    <div class="market-txt--otybz--section-order-details-box-price">Prezzo finale: ${(parseFloat(cartItem.price) * cartItem.quantity).toFixed(2)} €</div>
  </div>
  `;
  orderDetails.appendChild(orderItem);
});

const inputAndButtonDiv = document.createElement("div");
inputAndButtonDiv.innerHTML = `
  <div class="market-txt--otybz--section-input-button-wrapper">
    <input type="text" placeholder="Codice Sconto / Codice Promozionale">
    <button id="market-txt--otybz--section-myButton">Applicare</button>
    <div id="market-txt--otybz--section-message-eror"></div>
  </div>
`;
orderDetails.appendChild(inputAndButtonDiv);

const myButton = document.getElementById("market-txt--otybz--section-myButton");
const messageDiv = document.getElementById("market-txt--otybz--section-message-eror");
myButton.addEventListener("click", function() {
  messageDiv.textContent = "Codice non valido";
});


const totalOrderPrice = cartItemList.reduce((total, item) => total + parseFloat(item.price) * item.quantity, 0);
const totalOrderElement = document.createElement("div");
totalOrderElement.classList.add("market-txt--otybz--section-box-order-main-price");
totalOrderElement.innerHTML = `<strong class="market-txt--otybz--section-box-order-price">Costo totale dell'ordine: ${totalOrderPrice.toFixed(2)} €</strong>`;
orderDetails.appendChild(totalOrderElement);

const orderSummaryDetails = document.createElement("div");
orderSummaryDetails.innerHTML = `
<div class="market-txt--otybz--section-order-details-box-about">
  <div><strong>Nome:</strong> ${name}</div>
  <div><strong>Indirizzo postale:</strong> ${email}</div>
  <div><strong>Numero telefonico:</strong> ${phones}</div>
  <div><strong>Paese:</strong> ${country}</div>
  <div><strong>Città:</strong> ${city}</div>
  <div><strong>Indirizzo:</strong> ${address}</div>
</div>
`;
orderDetails.appendChild(orderSummaryDetails);

const thankYouBtn = document.createElement("button");
thankYouBtn.textContent = " Ordine confermato";
thankYouBtn.classList.add("market-txt--otybz--section-button-order-confirmed");

thankYouBtn.addEventListener("click", function () {
 closeModal(orderFormModal);
 openModal(thankYouModal);

 cartItemList = [];
 updateCartUI(); 


 

  const thankYouModalCloseBtn = document.getElementById("market-txt--otybz--section-thank-you-modal-close-btn");
  thankYouModalCloseBtn.addEventListener("click", function () {
   closeModal(cartModal);
   closeModal(thankYouModal);
  });
});

orderDetails.appendChild(thankYouBtn);

backBtn.style.display = "none";
continueBtn.style.display = "none";
} 
else {
orderForm.style.display = "flex";
backBtn.style.display = "block";
continueBtn.style.display = "block";
}
});


function validateForm() {
const name = document.getElementById("market-txt--otybz--section-name").value.trim();
const email = document.getElementById("market-txt--otybz--section-email").value.trim();
const phones = document.getElementById("market-txt--otybz--section-phone").value.trim();
const country = document.getElementById("market-txt--otybz--section-country").value.trim();
const city = document.getElementById("market-txt--otybz--section-city").value.trim();
const address = document.getElementById("market-txt--otybz--section-address").value.trim();
const message = document.getElementById("market-txt--otybz--section-message").value.trim();

for (let i = 0; i < errorMessages.length; i++) {
errorMessages[i].textContent = ""; 
}

let hasErrors = false;
if (!name) {
displayErrorMessage("market-txt--otybz--section-name", "Compila questo campo");
hasErrors = true;
}
if (!email) {
displayErrorMessage("market-txt--otybz--section-email", "Compila questo campo");
hasErrors = true;
}
if (!phones) {
displayErrorMessage("market-txt--otybz--section-phone", "Compila questo campo");
hasErrors = true;
}
if (!country) {
displayErrorMessage("market-txt--otybz--section-country", "Compila questo campo");
hasErrors = true;
}
if (!city) {
displayErrorMessage("market-txt--otybz--section-city", "Compila questo campo");
hasErrors = true;
}
if (!address) {
displayErrorMessage("market-txt--otybz--section-address", "Compila questo campo");
hasErrors = true;
}
return !hasErrors;
}

function displayErrorMessage(fieldName, message) {
const errorMessageElement = document.getElementById(`${fieldName}-error`);
if (errorMessageElement) {
errorMessageElement.textContent = message;
}
}


backBtn.addEventListener("click", function () {
closeModal(orderFormModal);
showCartModal();
});

orderForm.addEventListener("submit", function (event) {
event.preventDefault();
});

cartIcon.addEventListener("click", showCartModal);
if(notificationBarButton != null){
  notificationBarButton.addEventListener("click", showCartModal);
}



});

</script>

        

</body>
</html>
