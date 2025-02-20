<div class="space-y-6">
    <flux:heading class="text-center" size="xl">Seja bem-vindo!</flux:heading>

    <div class="flex flex-col gap-6">
        <flux:input label="Email" type="email" placeholder="email@example.com" />

        <flux:field>
            <div class="mb-3 flex justify-between">
                <flux:label>Password</flux:label>

                <flux:link href="#" variant="subtle" class="text-sm">Forgot password?</flux:link>
            </div>

            <flux:input viewable type="password" placeholder="Your password" />
        </flux:field>

        <flux:checkbox label="Remember me for 30 days" />

        <flux:button variant="primary" class="w-full">Log in</flux:button>
    </div>

    <flux:subheading class="text-center">
        <p>Primeira vez por aqui?</p>
        <flux:link href="/cadastrar" wire:navigate>Cadastre-se gratuitamente</flux:link>
    </flux:subheading>
</div>