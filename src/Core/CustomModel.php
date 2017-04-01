<?php

namespace Core;

use SebastianBergmann\Comparator\DateTimeComparator;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function getSingleUser($param, &$blockCustom, &$vendorUrl, $accessToken){
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'application/json';
        $clientSetup['headers']['Accept'] = 'application/json';
        $clientSetup['headers']['Authorization'] = 'Bearer ' . $accessToken;

        if($param['userIdType'] == 'intercom_id'){
            $vendorUrl = $vendorUrl . '/' . $param['userId'];
        }elseif($param['userIdType'] == 'user_id' || $param['userIdType'] == 'email'){
            $clientSetup['query'][$param['userIdType']] = $param['userId'];
        }

        return $clientSetup;
    }
    public static function deleteUser($param, &$blockCustom, &$vendorUrl, $accessToken){
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'application/json';
        $clientSetup['headers']['Accept'] = 'application/json';
        $clientSetup['headers']['Authorization'] = 'Bearer ' . $accessToken;

        if($param['userIdType'] == 'intercom_id'){
            $vendorUrl = $vendorUrl . '/' . $param['userId'];
        }elseif($param['userIdType'] == 'user_id' || $param['userIdType'] == 'email'){
            $clientSetup['query'][$param['userIdType']] = $param['userId'];
        }

        return $clientSetup;
    }
    public static function createLead($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = $param;

        // 'avatar_image_url'
        if(isset($result['avatar_image_url'])&&strlen($result['avatar_image_url'])>0){
            $result['avatar']['type'] = 'avatar';
            $result['avatar']['image_url'] = $result['avatar_image_url'];
            unset($result['avatar_image_url']);
        }
        // 'segments'
        if(isset($param['segments'])&&strlen($param['segments'])>0){
            $items = explode(',', $param['segments']);
            $itemsObj = [];
            foreach($items as $item){
                $itemsObj[] = ['id' => trim($item)];
            }
            $result['segments'] = '';
            $result['segments']['type'] = 'segment.list';
            $result['segments']['segments'] = $itemsObj;
        }
        // 'tags'
        if(isset($param['tags'])&&strlen($param['tags'])>0){
            $items = explode(',', $param['tags']);
            $itemsObj = [];
            foreach($items as $item){
                $itemsObj[] = ['id' => trim($item)];
            }
            $result['tags'] = '';
            $result['tags']['type'] = 'tag.list';
            $result['tags']['tags'] = $itemsObj;
        }

        return $result;
    }
    public static function updateLead($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = $param;

        // 'avatar_image_url'
        if(isset($result['avatar_image_url'])&&strlen($result['avatar_image_url'])>0){
            $result['avatar']['type'] = 'avatar';
            $result['avatar']['image_url'] = $result['avatar_image_url'];
            unset($result['avatar_image_url']);
        }
        // 'segments'
        if(isset($param['segments'])&&strlen($param['segments'])>0){
            $items = explode(',', $param['segments']);
            $itemsObj = [];
            foreach($items as $item){
                $itemsObj[] = ['id' => trim($item)];
            }
            $result['segments'] = '';
            $result['segments']['type'] = 'segment.list';
            $result['segments']['segments'] = $itemsObj;
        }
        // 'tags'
        if(isset($param['tags'])&&strlen($param['tags'])>0){
            $items = explode(',', $param['tags']);
            $itemsObj = [];
            foreach($items as $item){
                $itemsObj[] = ['id' => trim($item)];
            }
            $result['tags'] = '';
            $result['tags']['type'] = 'tag.list';
            $result['tags']['tags'] = $itemsObj;
        }

        return $result;
    }
    public static function getSingleLead($param, &$blockCustom, &$vendorUrl, $accessToken){
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'application/json';
        $clientSetup['headers']['Accept'] = 'application/json';
        $clientSetup['headers']['Authorization'] = 'Bearer ' . $accessToken;

        if($param['userIdType'] == 'intercom_id'){
            $vendorUrl = $vendorUrl . '/' . $param['userId'];
        }elseif($param['userIdType'] == 'user_id' || $param['userIdType'] == 'email'){
            $clientSetup['query'][$param['userIdType']] = $param['userId'];
        }

        return $clientSetup;
    }
    public static function deleteLead($param, &$blockCustom, &$vendorUrl, $accessToken){
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'application/json';
        $clientSetup['headers']['Accept'] = 'application/json';
        $clientSetup['headers']['Authorization'] = 'Bearer ' . $accessToken;

        if($param['userIdType'] == 'intercom_id'){
            $vendorUrl = $vendorUrl . '/' . $param['userId'];
        }elseif($param['userIdType'] == 'user_id' || $param['userIdType'] == 'email'){
            $clientSetup['query'][$param['userIdType']] = $param['userId'];
        }

        return $clientSetup;
    }
    public static function convertLeadToUser($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = [];
        if(in_array($param['leadIdType'], ['intercom_id', 'user_id', 'email'])){
            if($param['leadIdType']=='intercom_id'){ $param['leadIdType'] = 'id'; }
            $result['contact'][$param['leadIdType']] = $param['leadId'];
        }
        if(isset($param['user_id'])){
            $result['user']['user_id'] = $param['user_id'];
        }

        return $result;
    }
    public static function createNote($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = [];
        if(in_array($param['userIdType'], ['intercom_id', 'user_id', 'email'])){
            if($param['userIdType'] == 'intercom_id'){
                $param['userIdType'] = 'id';
            }
            $result['user'][$param['userIdType']] = $param['userId'];
        }
        $result['body'] = $param['body'];
        if(isset($param['admin_id'])&&strlen($param['admin_id'])>0){
            $result['admin_id'] = $param['admin_id'];
        }

        return $result;
    }
    public static function getUserNotes($param, &$blockCustom, &$vendorUrl, $accessToken){
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'application/json';
        $clientSetup['headers']['Accept'] = 'application/json';
        $clientSetup['headers']['Authorization'] = 'Bearer ' . $accessToken;

        if($param['userIdType'] == 'intercom_id'){
            $vendorUrl = $vendorUrl . '/' . $param['userId'];
        }elseif($param['userIdType'] == 'user_id' || $param['userIdType'] == 'email'){
            $clientSetup['query'][$param['userIdType']] = $param['userId'];
        }

        return $clientSetup;
    }
    public static function createAdminMessage($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = [];

        $result['from']['type'] = 'admin';
        $result['from']['id'] = $param['fromAdminId'];

        $result['to']['type'] = $param['receiverType'];
        $result['to'][$param['receiverIdType']] = $param['receiverId'];

        $result['message_type'] = $param['message_type'];
        $result['subject'] = $param['subject'];
        $result['body'] = $param['body'];
        if(isset($param['template'])){
            $result['template'] = $param['template'];
        }

        return $result;
    }
    public static function createUserMessage($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = [];

        if(in_array($param['senderIdType'], ['intercom_id', 'user_id', 'email'])){
            $result['from']['type'] = 'user';
            $result['from'][$param['senderIdType']] = $param['senderId'];
        }
        $result['body'] = $param['body'];

        return $result;
    }
    public static function createContactMessage($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = [];

        if(in_array($param['senderIdType'], ['intercom_id', 'user_id', 'email'])){
            $result[$param['from']['type']] = 'contact';
            $result[$param['from']['senderIdType']] = $param['senderId'];
        }
        $result['body'] = $param['body'];

        return $result;
    }
    public static function getSingleUserConversations($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = [];

        if(in_array($param['userIdType'], ['intercom_user_id', 'user_id', 'email'])){
            $result[$param['type']] = 'user';
            $result[$param['userIdType']] = $param['userId'];
        }

        return $result;
    }
    public static function replyToUserComment($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = [];

        $result['type'] = 'user';
        $result['message_type'] = 'comment';
        $result['body'] = $param['body'];
        if(in_array($param['userIdType'], ['intercom_user_id', 'user_id', 'email'])){
            $result[$param['userIdType']] = $param['userId'];
        }
        if(isset($param['attachment_urls'])&&count($param['attachment_urls'])>0) {
            $result['attachment_urls'] = $param['attachment_urls'];
        }

        return $result;
    }
    public static function getSingleVisitor($param, &$blockCustom, &$vendorUrl, $accessToken){
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'application/json';
        $clientSetup['headers']['Accept'] = 'application/json';
        $clientSetup['headers']['Authorization'] = 'Bearer ' . $accessToken;

        if($param['userIdType'] == 'intercom_id'){
            $vendorUrl = $vendorUrl . '/' . $param['userId'];
        }elseif($param['userIdType'] == 'user_id' || $param['userIdType'] == 'email'){
            $clientSetup['query'][$param['userIdType']] = $param['userId'];
        }

        return $clientSetup;
    }
    public static function updateVisitor($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = $param;

        // 'avatar_image_url'
        if(isset($result['avatar_image_url'])&&strlen($result['avatar_image_url'])>0){
            $result['avatar']['type'] = 'avatar';
            $result['avatar']['image_url'] = $result['avatar_image_url'];
            unset($result['avatar_image_url']);
        }
        // 'segments'
        if(isset($param['segments'])&&strlen($param['segments'])>0){
            $items = explode(',', $param['segments']);
            $itemsObj = [];
            foreach($items as $item){
                $itemsObj[] = ['id' => trim($item)];
            }
            $result['segments'] = '';
            $result['segments']['type'] = 'segment.list';
            $result['segments']['segments'] = $itemsObj;
        }
        // 'tags'
        if(isset($param['tags'])&&strlen($param['tags'])>0){
            $items = explode(',', $param['tags']);
            $itemsObj = [];
            foreach($items as $item){
                $itemsObj[] = ['id' => trim($item)];
            }
            $result['tags'] = '';
            $result['tags']['type'] = 'tag.list';
            $result['tags']['tags'] = $itemsObj;
        }

        return $result;
    }
    public static function convertVisitorToLead($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = [];
        if(in_array($param['visitorUserIdType'], ['intercom_id', 'user_id', 'email'])){
            $result['visitor'][$param['visitorUserIdType']] = $param['visitorUserId'];
        }
        if(isset($param['lead_id'])){
            $result['contact']['user_id'] = $param['lead_id'];
        }
        $result['type'] = 'lead';

        return $result;
    }
    public static function createSubscription($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = $param;

        // 'topics'
        if(isset($param['topics'])&&strlen($param['topics'])>0){
            $items = explode(',', $param['topics']);
            $itemsObj = [];
            foreach($items as $item){
                $itemsObj[] = trim($item);
            }
            $result['topics'] = '';
            $result['topics'] = $itemsObj;
        }

        return $result;
    }
    public static function createEventWebhookSubscription($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = $param;

        // 'topics'
        if(isset($param['metadata_event_names'])&&strlen($param['metadata_event_names'])>0){
            $items = explode(',', $param['metadata_event_names']);
            $itemsObj = [];
            foreach($items as $item){
                $itemsObj[] = trim($item);
            }
            unset($result['metadata_event_names']);
            $result['metadata']['event_names'] = $itemsObj;
        }
        $result['topics'] = ["event.created"];

        return $result;
    }
    public static function updateEventWebhookSubscription($param, &$blockCustom, $vendorUrl, $accessToken){
        $result = $param;

        // 'topics'
        if(isset($param['metadata_event_names'])&&strlen($param['metadata_event_names'])>0){
            $items = explode(',', $param['metadata_event_names']);
            $itemsObj = [];
            foreach($items as $item){
                $itemsObj[] = trim($item);
            }
            unset($result['metadata_event_names']);
            $result['metadata']['event_names'] = $itemsObj;
        }
        $result['topics'] = ["event.created"];

        return $result;
    }
}