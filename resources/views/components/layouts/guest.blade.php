<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
        
        <title>{{ $title ?? 'Testando Flux 2.0' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxAppearance

    </head>
    <body>
        <div class="w-screen h-screen flex items-center justify-center ">
            <div class="flex min-h-screen">
                <div class="flex-1 flex justify-center items-center">
                    <div class="w-80 max-w-80 space-y-6">
                        <div class="flex justify-center opacity-50">
                            <a href="/" class="group flex items-center gap-3">
                                <div>
                                    <svg class="h-4 text-zinc-800 dark:text-white" viewBox="0 0 18 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <line x1="1" y1="5" x2="1" y2="10" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round"></line>
                                            <line x1="5" y1="1" x2="5" y2="8" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round"></line>
                                            <line x1="9" y1="5" x2="9" y2="10" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round"></line>
                                            <line x1="13" y1="1" x2="13" y2="12" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round"></line>
                                            <line x1="17" y1="5" x2="17" y2="10" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round"></line>
                                        </g>
                                    </svg>
                                </div>
                
                                <span class="text-xl font-semibold text-zinc-800 dark:text-white">flux</span>
                            </a>
                        </div>
                
                        {{ $slot }}
                    </div>
                </div>

                <div class="flex-1 p-4 max-lg:hidden">
                    <div class="text-white relative rounded-lg h-full w-full bg-zinc-900 flex flex-col items-start justify-end p-16"
                        style="background-image: url('https://newsoft.online/wp-content/uploads/2017/02/office-wallpaper-9.jpg'); background-size: cover">
                        <div class="flex gap-2 mb-4">
                            <flux:icon.star variant="solid" />
                            <flux:icon.star variant="solid" />
                            <flux:icon.star variant="solid" />
                            <flux:icon.star variant="solid" />
                            <flux:icon.star variant="solid" />
                        </div>
        
                        <div class="mb-6 italic font-base text-3xl xl:text-4x"
                            style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                            Flux has enabled me to design, build, and deliver apps faster than ever before.
                        </div>
        
                        <div class="flex gap-4">
                            <flux:avatar src="https://fluxui.dev/img/demo/caleb.png" class="size-12" />
        
                            <div class="flex flex-col justify-center font-medium">
                                <div class="text-lg">Caleb Porzio</div>
                                <div class="text-zinc-300">Creator of Livewire</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <flux:toast />
        @fluxScripts
    </body>
</html>
