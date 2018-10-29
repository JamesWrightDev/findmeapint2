@extends('welcome')
@section('content')
<div class="container">
        <div class="loader" style="display:none" id="loader"></div>              
            <div class="search-container">
                <div class="row">
                    <div class="col-md-12 col-centered">
                        <form action="/results" method="POST" id='form' >
                            {{ csrf_field() }}
                            <input id='postcode' type="text" name="postcode" required placeholder="Post code">
                            <input  name="coordinates" placeholder="latitude" id='coordiantes' type="text" hidden>
                            
                            <p id="error" style="display:none" >Please enter a valid postcode</p>
                        </form>
                    
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <button type="button" id="postcodeButton" class="btn btn-primary">Find Me a Pint</button>
                    <button type="button" id="geoButton"  class="btn btn-danger">Use Current Location</button>
                    </div>
                </div>
            </div>
            
            
              
        </div>
        @endsection