<div>
    <form action="post">
        @csrf
        <textarea name="body" id="" cols="30" rows="10"
        class="form-control
        block
        w-ful
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0">
            </textarea> 
        
        <label for="visible"><input type="checkbox" name="visible">Visible</label>
        <button type="submit" class="w-full shadow bg-purple">
            Enviar
        </button>
    </form>
    
    
</div>
