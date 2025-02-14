@props(['name'])
@error($name)
<p class="text-xs text-red-500 font-normal m-1">{{ "* " .$message }}</p>
@enderror