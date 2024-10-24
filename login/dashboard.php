<?php

include('./conexión.php');

$varuser = $_SESSION["usuario"];

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="icon" href="../img/Imagen3.png">
  <link rel="stylesheet" href="../iconos/import-icons.css">
  <script src="../tailwind-cdn.js"></script>
  <script src="../tailwind.config2.js"></script>
</head>
<body>
 <div class="min-h-full">
  <nav class="bg-firetruck">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="../img/logo.png" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="rounded-md bg-red-950 px-3 py-2 text-sm font-medium text-white" aria-current="page">Inicio</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-red-900 hover:text-white">Personal</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-red-900 hover:text-white">Inventario</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-red-900 hover:text-white">Buscar</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-red-900 hover:text-white">Reportes</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" >
                <a href="#" class="block px-4 py-2 text-sm text-white" role="menuitem" tabindex="-1" id="user-menu-item-1" title="configuracion"><i class="fa-solid fa-sliders"></i></a>
                <a href="#" class="block px-4 py-2 text-sm text-white" role="menuitem" tabindex="-1" id="user-menu-item-2" title="Cerrar Sesion"><i class="fa-solid fa-right-from-bracket"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">


          <!-- Mobile menu button -->
          <button id="desactive-close" style="display: block; "type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Abrir menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
          <button id="active-close" style="display: none;" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden bg-white" id="mobile-menu" style="display: none;">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3 ">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="block rounded-md bg-red-950 px-3 py-2 text-base font-medium text-white" aria-current="page">Inicio</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-red-900 hover:text-white">Personal</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-red-900 hover:text-white">Inventario</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-red-900 hover:text-white">Buscar</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-red-900 hover:text-white">Reportes</a>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-red-900 hover:text-white">Configuración</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-red-900 hover:text-white">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Resumen</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
    </div>
  </main>
</div> 
<script src="./js/close.js"></script>
</body>
</html>
