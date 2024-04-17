<?php
class KipasAngin implements Device {
    public function hidupkan(): void {
        echo "Kipas angin berputar\n";
    }

    public function matikan(): void {
        echo "Kipas angin berhenti\n";
    }
}
?>