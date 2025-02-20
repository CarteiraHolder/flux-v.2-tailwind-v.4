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

    <flux:subheading class="text-center">
        <p>Primeira vez por aqui?</p>
        <flux:link href="/cadastrar" wire:navigate>Cadastre-se gratuitamente</flux:link>
    </flux:subheading>
</div>