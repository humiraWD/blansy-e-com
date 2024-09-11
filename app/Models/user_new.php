    <?php
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isAffiliate()
    {
        return $this->role === 'affiliate';
    }
