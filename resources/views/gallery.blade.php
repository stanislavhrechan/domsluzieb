@extends('layouts.app')
@section('content')
<div class="container bg-[#111111]">
    <div class="canvas" id="canvas"></div>
    <div class="overlay" id="overlay"></div>
</div>

<div class="project-title">
    <p></p>
</div>

<style>
  .container { z-index: 1; }
.canvas { z-index: 1; }




.overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.6);
  opacity: 0;
  transition: 0.3s;
}

.canvas {
  position: absolute;
  will-change: transform;
}

.container {
  position: fixed;
  width: 100%;
  height: 100%;
  overflow: hidden;
  cursor: grab;
   z-index: 10;
    touch-action: none;
}



.container, .item, .item img {
  user-select: none;
  -webkit-user-select: none;
  -webkit-user-drag: none;
}

.container {
  cursor: grab;
}

.canvas {
  z-index: 10;
  position: absolute;
}

.item {
  position: absolute;
  width: 250px;
  height: 280px;
}

.item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>
@endsection