@include('partials.header')

<h3>Create an Account</h3>
<form action="/save" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror


    <div class="mb-3">
      <label for="LastName" class="form-label">Last Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="lastName">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label">First Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="firstName">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input 
      type="text" 
      class="form-control" 
      name="email">
    </div>
    <div class="mb-3">
      <label for="contactNumber" class="form-label">Contact Number</label>
      <input 
      type="text" 
      class="form-control" 
      name="contactNumber">
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input 
      type="text" 
      class="form-control" 
      name="address">
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  @include('partials.footer')