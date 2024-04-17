<?php
class Saklar {
    private Device $device;
    private bool $status;

    public function __construct(Device $device) {
        $this->device = $device;
        $this->status = false;
    }

    public function operasikan(): void {
        if ($this->status) {
            $this->device->matikan();
            $this->status = false;
        } else {
            $this->device->hidupkan();
            $this->status = true;
        }
    }
}
?>