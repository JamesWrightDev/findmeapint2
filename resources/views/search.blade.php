@extends('welcome')
@section('content')

        
<div class="loader" style="display:none" id="loader"></div>
<div class="search-container">
		<div class="columns margin-medium">
				<div class="column is-three-fifths is-offset-one-fifth">
					<div class="is-flex is-horizontal-center">
							<form action="/results" method="POST" id='form' >
								{{ csrf_field() }}            
							<input id='postcode' type="text" name="postcode" required placeholder="Post code">
							<button type="button" id="postcodeButton" class=" button button-primary">Find Me a Pint</button>
							<input  name="coordinates" placeholder="latitude" id='coordiantes' type="text" hidden>
							<p id="error" style="display:none" >Please enter a valid postcode</p>
							</form>
			
					</div>
					
					
							</div>
						</div>

						<div class="columns margin-medium">
								<div class="column is-three-fifths is-offset-one-fifth">
									<div class="is-flex is-horizontal-center">
											<button type="button" id="geoButton"  class="button button-primary">Use Current Location</button>
			
									</div>
							
						</div>
						</div>
						
					</div>

</div>

            
            

        @endsection