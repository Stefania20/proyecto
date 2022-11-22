@extends('layouts.app')
@section('title' , 'Home')
@section('content')

                    
                    @csrf
                    
                    <div class="mb-4 form-floating">
                        
                    </div>
                    @error('message')
                    <p class="red-text text-darken-2">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="form-control-submit-button">Ingresar</button>
                    </form>
                </div> 
            </div> 
        </div> 
    </div> 
 </div>

 <div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
        <img src="{{ url('img/icono.png') }}" id="icon" alt="User Icon" />
    </div>
        <form action="" method="POST">
            @csrf
            <h1>Iniciar Sesión</h1>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                        <input type="text" placeholder="name@ejemplo.com" id="email" name="email" class="fadeIn second">
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contraseña</label> 
                        <input type="password" placeholder="contraseña" id="password" name="password"  class="fadeIn second">
                        
                        
                    </div>
                    @error('password')
                    <p class="alert alert-danger">{{  $message }}</p>
                    @enderror
                    <input type="submit" class="fadeIn fourth" value="Log In">
        </form>            
    </div>
</div>
@endsection