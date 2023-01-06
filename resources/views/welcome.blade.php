@extends('layouts.app')

@section('content')
    <div class="container">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <div class="flex items-center">
                               
                    <h2 class="display-3" style="margin:100px 0 50px 0;">The restaurant ! <span style="color: #000042; text-shadow: 2px 2px 5px grey"> Order and enjoy your meal! </span></h2>
                   
                    </div> 
                        
                </div>

                <div class="mt-8">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="d-flex align-items-center justify-content-center" style="margin-bottom:40px;">
                                <div class="col-sm-8" style="box-shadow: 20px 20px 50px 15px grey;">
                                    <img src="/img/pizza.jpg" class="img-fluid rounded mx-auto d-block"  alt="your favourite meal"/>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="/menu" class="text-dark" style="text-decoration:none; text-shadow:3px 3px 10px grey;"> <h4 class="text-center" >Menu - click to find out what we serve!</h4></a>
                            </div>

                           
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                
                            </div>

                            <div class="ml-12">
                               
                            
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                             
                            
                            </div>

                            <div class="ml-12">
                                
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            
                            
                            </div>
                        </div>
                    </div>
    </div>
@endsection
