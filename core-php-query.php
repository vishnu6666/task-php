public function get_wishlist_status($listing_id)
    {
        $this->db->select('*')
            ->from('wishlist')
            ->where('listing_id', $listing_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return 'wish_bt liked';
        } else {
            return 'wish_bt';
        }
    }