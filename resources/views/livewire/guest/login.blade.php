<div class="space-y-6">
    <flux:heading class="text-center" size="xl">Seja bem-vindo!</flux:heading>

    <form wire:submit='submit' class="flex flex-col gap-6">
        <flux:input wire:model='email' label="Email" type="email"/>

        <flux:input wire:model='password' viewable label="Senha" type="password"/>
        
        <div class="text-right" style="margin-top: -25px">
            <flux:link href="#" variant="subtle" class="text-sm ">Forgot password?</flux:link>
        </div>

        <flux:checkbox wire:model='remember' label="Manter-me conectado" />

        <flux:button variant="primary" type='submit' class="w-full cursor-pointer">Acessar</flux:button>
    </form>

    @if ($authenticationFailure)
        <div class="border-l-4 border-red-400 bg-red-50 p-4">
            <div class="flex">
                <div class="shrink-0">
                    <svg class="size-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-red-700">
                        Email e/ou senha incorretos.
                    </p>
                </div>
            </div>
        </div>
    @endif

    <flux:subheading class="text-center">
        <p>Primeira vez por aqui?</p>
        <flux:link href="/cadastrar" wire:navigate>Cadastre-se gratuitamente</flux:link>
    </flux:subheading>

    

</div>