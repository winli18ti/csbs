<div>
    <h3>Login</h3>
    <form wire:submit="auth_login">
        @csrf
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>
                    <input type="text" wire:model.live="email" />
                </td>
            </tr>
            @error('email') <span>{{$message}}</span> @enderror
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <input type="password" wire:model.live="password"/>
                </td>
            </tr>
            @error('password') <span>{{$message}}</span> @enderror
            <tr>
                <td colspan="3">
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</div>
