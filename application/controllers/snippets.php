<?php

/**
 * apply_for_course
 *
 * Increments enrolled(until dissallowed) and marks user as applied
 *
 * @access public
 * @param integer $uid ID of User applying
 * @param integer $cid ID of Course to apply for
 */
function apply_for_course($uid, $cid)
{
    if(course exists and user exists)
    {
        // add user to course's applied list and update enrolled count
        $this->courses_model->apply_user($cid, $uid);
        // add course to user's applied list
        $this->users_model->apply_for_course($uid, $cid);
    }
    else
    {
        return FALSE;
    }
}