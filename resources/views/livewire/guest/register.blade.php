<div class="space-y-6">
    <flux:heading class="text-center" size="xl">Registre-se agora!</flux:heading>
    <form wire:submit='submit' class="flex flex-col gap-6">
        <flux:input wire:model='name' label="Nome" type="text" />

        <flux:input wire:model='email' label="Email" type="email" />
    
        <flux:input wire:model='password' viewable label="Senha" type="password" />
    
        <flux:checkbox wire:model='accepted' label="Eu li e concordo com termos e políticas" />

        <flux:button variant="primary" type="submit" class="w-full cursor-pointer">
            Cadastrar
        </flux:button>
    </form>
    <flux:subheading class="text-center">
        Já tem conta? <flux:link href="/login" wire:navigate>Acessar</flux:link>
    </flux:subheading>
</div>