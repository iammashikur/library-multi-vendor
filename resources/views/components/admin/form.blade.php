<div>
   <form {{ $attributes }}>
      @csrf
        {{ $slot }}
   </form>
</div>