<?php
class Lampu implements Device {
    public function hidupkan(): void {
        echo "Lampu menyala\n";
    }

    public function matikan(): void {
        echo "Lampu mati\n";
    }
}
?>