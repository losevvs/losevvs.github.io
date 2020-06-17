<?php

include_once ROOT . '/models/Reviews.php';

class ReviewsController
{
    public function actionIndex()
    {

        $reviewsList = array();
        $reviewsList = Reviews::getReviewsList();

        require_once(ROOT . '/views/reviews/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $reviewsItem = Reviews::getReviewsItemByID($id);

            require_once(ROOT . '/views/reviews/view.php');

            /*			echo 'actionView'; */
        }

        return true;

    }
}