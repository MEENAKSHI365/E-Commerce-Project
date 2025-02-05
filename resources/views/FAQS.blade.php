@extends('layout')
@section('title') Coziq - FAQ'S @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<section>
<h1 align="center" class="black-text col-md-12" style="font-weight:bold;">Frequently Asked Questions</h1>
  <p align="center"></p>
  <div align="center">
    <!--Grid column-->
      <div align="left" class="col-md-6" style="font-family: 'Balsamiq Sans', cursive;">

        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Q1 -->
          <div class="card p-3">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Why has my order failed ?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">Don't Worry! Sometimes, orders may stumble for various reasons like payment failure, wrong phone details, or even the occasional glitch on our side. But fear not! If any amount has been deducted, rest assured it'll boomerang right back to your original payment mode.

              </div>
            </div>

          </div>
          <!-- Q1 -->
          <!--Q2-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading2" 
                aria-controls="heading2">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i>What are the different types of payment? ?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading2" class="collapse" role="tabpanel" aria-labelledby="heading2"
              data-parent="#accordionEx">
              <div class="card-body">
              For your ease, we have various modes of payment. You can use UPI/Credit & Debit Cards/Net Banking to place an order. We also have a COD option, feel free to explore the same.
              </div>
            </div>

          </div>
          <!-- Q2 -->

            <!--Q3-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne3">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading3" 
                aria-controls="heading3">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Can I use multiple payment methods for a single order?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading3" class="collapse" role="tabpanel" aria-labelledby="heading3"
              data-parent="#accordionEx">
              <div class="card-body">
              At the moment, we only support one payment method per order. You can choose from various options like UPI/Credit & Debit Cards/Net Banking to complete your purchase.
              </div>
            </div>

          </div>
          <!-- Q3 -->
          
           <!--Q4-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne4">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading4" 
                aria-controls="heading4">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> How long does it take to process a refund? 
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading4" class="collapse" role="tabpanel" aria-labelledby="heading4"
              data-parent="#accordionEx">
              <div class="card-body">
              For COD: Refunds will kick off in 3-4 business days after your product passes our quality check, hitting up the UPI ID you gave when you started the return.

For Prepaid: Once we pick up your product and it passes a quick quality check, your refund will be on its way in 5-7 business days, straight back to your original payment method. Sit tight and stay hyped!
              </div>
            </div>

          </div>
          <!-- Q4 -->
            <!--Q5-->
             <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne5">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading5" 
                aria-controls="heading5">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i>What is your return policy? 
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading5" class="collapse" role="tabpanel" aria-labelledby="heading5"
              data-parent="#accordionEx">
              <div class="card-body">
              We want you to be completely satisfied with your COZIQ purchase. If you're not happy with an item, you can return it within 3 to 5 days of receiving it for a full refund. Please ensure that the item is in its original condition with tags attached. Please note: Shipping/Delivery charges are non-refundable. The return window for 90-minute, same-day, next-day and 2 days delivery is two days.
              </div>
            </div>

          </div>
              <!--Q5-->
              
               <!--Q6-->
             <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne6">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading6" 
                aria-controls="heading6">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> How long do you usually take to deliver an order?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading6" class="collapse" role="tabpanel" aria-labelledby="heading6"
              data-parent="#accordionEx">
              <div class="card-body">
              Standard delivery: Our standard delivery timeline is between 10 to 15 business days, which include the order processing time and delivery time. It may vary slightly depending on the location.

Fast Delivery: Products with a Fast Delivery Tag have a delivery timeline of 3-5 business days. 
              </div>
            </div>

          </div>



            


      </div>
      <!--Grid column-->
      </div>

</section>
@endsection