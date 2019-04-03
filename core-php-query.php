This is JOin query for more the two table  
$query="SELECT listing.id as listingid,listing.listing_title,listing.category,listing.form_type,listing.keywords,listing.description,listing.photo,listing.city,listing.state,listing.map_lat,listing.map_long,review.listing_id,review.rating_review,AVG(review.rating_review) AS review_avg ,count(review.listing_id),category.category_name ,category.id AS review_count
                        FROM wishlist                        
                        JOIN listing  ON wishlist.listing_id = listing.id
                        LEFT JOIN review ON wishlist.listing_id = review.listing_id
                        JOIN category ON category.id = listing.category 
                        WHERE wishlist.user_id=$user_id
                        GROUP BY listing.id
                        ORDER BY wishlist.wishlist_id  DESC  LIMIT 0, 100 
                        ";
  $query_result = $this->db->query($query);
