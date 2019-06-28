@include('plantilla.head')
@include('plantilla.nav')
@include('plantilla.body') 

<div class="container" style="width:80%;">
    en este momento usted ya esta postulado para la secretaria de cultura
{{ $create ->name}}
con el correo 
{{ $create ->email}}
y acontinuacion con el curp
{{ $create ->curp}}
podra ver el seguimiento que se le da a su curriculum
</div>



@include('plantilla.footer')