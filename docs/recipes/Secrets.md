# Secrets
Secrets are required for salting private keys. The licensor keeps all available secrets, licensees have them in their encoded checker files.
See the [checker](https://github.com/sribna/licensee/blob/master/src/Checker.php)
When checking private keys (activation and verification), only enabled secrets will be considered.

    use Fluent\Licensor\Models\Secret;
    
    // Add
    $secret = Secret::create(['id' => 'SECRET_PHRASE', 'status' => true]);
    
    // Off
    $secret->disable();
    
    // On
    $secret->enable();
