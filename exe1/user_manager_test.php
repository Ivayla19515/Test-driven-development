<?php

require_once 'src/UserManager.php';

use PHPUnit\Framework\TestCase;

class UserManagerTest extends TestCase {
    protected $userManager;

    protected function setUp(): void {
        $this->userManager = new UserManager();
    }

    public function testRegisterUser(): void {
        $this->userManager->registerUser('testuser', 'testpassword');
        $this->assertSame('testpassword', $this->userManager->validateCredentials('testuser', 'testpassword'));
    }

    public function testValidateCredentials(): void {
        $this->userManager->registerUser('testuser', 'testpassword');
        $this->assertTrue($this->userManager->validateCredentials('testuser', 'testpassword'));
        $this->assertFalse($this->userManager->validateCredentials('testuser', 'wrongpassword'));
        $this->assertFalse($this->userManager->validateCredentials('nonexistentuser', 'testpassword'));
    }
}

?>