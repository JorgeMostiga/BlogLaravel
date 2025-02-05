
{{-- 
        cuando no defines dentor de @props y usas otros parametros se guardan dentro de la variable $attributes entonces con el metodo merge nos aseguramos
        que se concatene con la variable $class definiendo un array con el nombre del attributo y el valor asi:
--}}
<div {{ $attributes->merge(['class'=>'alert '.$class]) }} role="alert">
        {{ $icon }}<h5 class="alert-heading">{{ $titulo_alerta ?? 'Info Alert' }}</h5>{{ $slot }} {{-- $slot es variable por defecto que usa para poner contenido dentro del componente. --}}
  </div>
  