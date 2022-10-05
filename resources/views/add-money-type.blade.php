@if($errors->any())                           
@foreach($errors->all() as $error)            
  {{ $error }}<br>                            
@endforeach                                   
@endif                                        
<form method="post" action="submitmyform">	
       {{ csrf_field()}}               
	<p>
		<label>Name</label>
		<input type="text" name="name" value="{{ old("name")}}"/>
	</p>
	<p>
		<label>Amount</label>
		<input type="number" name="amount" value="{{ old("amount")}}"/>
	</p>
	<p>
		<label>Rate</label>
		<input type="number" name="rate" value="{{ old("rate")}}"/>
	</p>
	<p>
		<label>Country</label>
		<input type="text" name="country" value="{{ old("country")}}"/>
	</p>
	<p>
		<label>First minted</label>
		<input type="date" name="first_minted" value="{{ old("first_minted")}}"/>
	</p>
    <p>
      	<input type="submit" name="Submit">
    </p>
</form>