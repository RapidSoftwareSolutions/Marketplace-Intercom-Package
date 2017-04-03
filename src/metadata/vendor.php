<?php
return array (
    'package' => 'Intercom',
    'tagline' => 'Access data and build integrations for this chat app.',
    'description' => 'Connect to the Intercom Customer Service API to access data and build integrations for this chat app. Test an API call and export the code snippet into your app.',
    'image' => 'https://logo.clearbit.com/intercom.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-Intercom-Package',
    'keywords' => array (
        'API', 'Intercom',
    ),
    'accounts' => array (
        'domain' => 'intercom.com',
        'credentials' => array (
            'clientId',
            'clientSecret'
        ),
    ),
    'blocks' => array (
        array (
            'name' => 'getAccessToken',
            'description' => 'Fetch access token.',
            'args' => array (
                array (
                    'name' => 'clientId',
                    'type' => 'credentials',
                    'info' => 'Client identifier from your credentials.',
                    'required' => true,
                ),
                array (
                    'name' => 'clientSecret',
                    'type' => 'credentials',
                    'info' => 'Client secret from your credentials.',
                    'required' => true,
                ),
                array (
                    'name' => 'code',
                    'type' => 'String',
                    'info' => 'This is automatically passed by the redirect.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createUserByEmail',
            'description' => 'Create user by email.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'email',
                    'type' => 'String',
                    'info' => 'The user\'s email address.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'A unique string identifier for the user.',
                    'required' => false,
                ),
                array (
                    'name' => 'phone',
                    'type' => 'String',
                    'info' => 'The user\'s phone number.',
                    'required' => false,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The user\'s full name.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenIp',
                    'type' => 'String',
                    'info' => 'An ip address.',
                    'required' => false,
                ),
                array (
                    'name' => 'customAttributes',
                    'type' => 'JSON',
                    'info' => 'JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenUserAgent',
                    'type' => 'String',
                    'info' => 'The user agent the user last visited your application with.',
                    'required' => false,
                ),
                array (
                    'name' => 'companies',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects of companies.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastRequestAt',
                    'type' => 'Number',
                    'info' => 'The date the user last visited your application, UNIX timestamp.',
                    'required' => false,
                ),
                array (
                    'name' => 'updateLastRequestAt',
                    'type' => 'Boolean',
                    'info' => 'If true, instructs Intercom to update the user\'s last_request_at value.',
                    'required' => false,
                ),
                array (
                    'name' => 'newSession',
                    'type' => 'Boolean',
                    'info' => 'If true, instructs Intercom to register the request as a session.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createUserById',
            'description' => 'Create user by identifier.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'A unique string identifier for the user.',
                    'required' => true,
                ),
                array (
                    'name' => 'email',
                    'type' => 'String',
                    'info' => 'The user\'s email address.',
                    'required' => false,
                ),
                array (
                    'name' => 'phone',
                    'type' => 'String',
                    'info' => 'The user\'s phone number.',
                    'required' => false,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The user\'s full name.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenIp',
                    'type' => 'String',
                    'info' => 'An ip address.',
                    'required' => false,
                ),
                array (
                    'name' => 'customAttributes',
                    'type' => 'JSON',
                    'info' => 'JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenUserAgent',
                    'type' => 'String',
                    'info' => 'The user agent the user last visited your application with.',
                    'required' => false,
                ),
                array (
                    'name' => 'companies',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects of companies.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastRequestAt',
                    'type' => 'Number',
                    'info' => 'The date the user last visited your application, UNIX timestamp.',
                    'required' => false,
                ),
                array (
                    'name' => 'updateLastRequestAt',
                    'type' => 'Boolean',
                    'info' => 'If true, instructs Intercom to update the user\'s last_request_at value.',
                    'required' => false,
                ),
                array (
                    'name' => 'newSession',
                    'type' => 'Boolean',
                    'info' => 'If true, instructs Intercom to register the request as a session.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateUserByEmail',
            'description' => 'Update user by email.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'email',
                    'type' => 'String',
                    'info' => 'The user\'s email address.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'A unique string identifier for the user.',
                    'required' => false,
                ),
                array (
                    'name' => 'phone',
                    'type' => 'String',
                    'info' => 'The user\'s phone number.',
                    'required' => false,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The user\'s full name.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenIp',
                    'type' => 'String',
                    'info' => 'An ip address.',
                    'required' => false,
                ),
                array (
                    'name' => 'customAttributes',
                    'type' => 'JSON',
                    'info' => 'JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenUserAgent',
                    'type' => 'String',
                    'info' => 'The user agent the user last visited your application with.',
                    'required' => false,
                ),
                array (
                    'name' => 'companies',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects of companies.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastRequestAt',
                    'type' => 'Number',
                    'info' => 'The date the user last visited your application, UNIX timestamp.',
                    'required' => false,
                ),
                array (
                    'name' => 'updateLastRequestAt',
                    'type' => 'Boolean',
                    'info' => 'If true, instructs Intercom to update the user\'s last_request_at value.',
                    'required' => false,
                ),
                array (
                    'name' => 'newSession',
                    'type' => 'Boolean',
                    'info' => 'If true, instructs Intercom to register the request as a session.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateUserById',
            'description' => 'Update user by identifier.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'A unique string identifier for the user.',
                    'required' => true,
                ),
                array (
                    'name' => 'email',
                    'type' => 'String',
                    'info' => 'The user\'s email address.',
                    'required' => false,
                ),
                array (
                    'name' => 'phone',
                    'type' => 'String',
                    'info' => 'The user\'s phone number.',
                    'required' => false,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The user\'s full name.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenIp',
                    'type' => 'String',
                    'info' => 'An ip address.',
                    'required' => false,
                ),
                array (
                    'name' => 'customAttributes',
                    'type' => 'JSON',
                    'info' => 'JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenUserAgent',
                    'type' => 'String',
                    'info' => 'The user agent the user last visited your application with.',
                    'required' => false,
                ),
                array (
                    'name' => 'companies',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects of companies.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastRequestAt',
                    'type' => 'Number',
                    'info' => 'The date the user last visited your application, UNIX timestamp.',
                    'required' => false,
                ),
                array (
                    'name' => 'updateLastRequestAt',
                    'type' => 'Boolean',
                    'info' => 'If true, instructs Intercom to update the user\'s last_request_at value.',
                    'required' => false,
                ),
                array (
                    'name' => 'newSession',
                    'type' => 'Boolean',
                    'info' => 'If true, instructs Intercom to register the request as a session.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getUsers',
            'description' => 'Fetch a list of users.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'what page of results to fetch.',
                    'required' => false,
                ),
                array (
                    'name' => 'perPage',
                    'type' => 'String',
                    'info' => 'how many results per page.',
                    'required' => false,
                ),
                array (
                    'name' => 'order',
                    'type' => 'String',
                    'info' => 'Return the users in ascending or descending order. One of: asc, desc.',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'what field to sort the results by. One of: created_at, last_request_at, signed_up_at, updated_at.',
                    'required' => false,
                ),
                array (
                    'name' => 'createdSince',
                    'type' => 'String',
                    'info' => 'limit results to users that were created in that last number of days.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getUsersByTag',
            'description' => 'Fetch segmented users or leads by tag.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'tagId',
                    'type' => 'String',
                    'info' => 'The identifier of the tag to filter by.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getUsersBySegment',
            'description' => 'Fetch segmented users or leads by segment.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'segmentId',
                    'type' => 'String',
                    'info' => 'The identifier of the segment to filter by.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleUser',
            'description' => 'Retrieve user by identifier.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'The user identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'userIdType',
                    'type' => 'String',
                    'info' => 'The user identifier type. One of: intercom_id, user_id, email.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'deleteUser',
            'description' => 'Delete user.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'The user identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'userIdType',
                    'type' => 'String',
                    'info' => 'The user identifier type. One of: intercom_id, user_id, email.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'scrollUsers',
            'description' => 'Scroll over all users.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'scrollParam',
                    'type' => 'String',
                    'info' => 'Scroll parameter.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createLead',
            'description' => 'Create lead.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'Identifier for the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'email',
                    'type' => 'String',
                    'info' => 'The email you have defined for the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'phone',
                    'type' => 'String',
                    'info' => 'The phone number you have defined for the lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'avatarImageUrl',
                    'type' => 'String',
                    'info' => 'An avatar URL for the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'userAgentData',
                    'type' => 'String',
                    'info' => 'Data about the last user agent the Lead was seen using.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenIp',
                    'type' => 'String',
                    'info' => 'An ip address.',
                    'required' => false,
                ),
                array (
                    'name' => 'companies',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects of companies.',
                    'required' => false,
                ),
                array (
                    'name' => 'socialProfiles',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects, of social profiles associated with the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'segments',
                    'type' => 'String',
                    'info' => 'Comma-separated list of segments the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'tags',
                    'type' => 'String',
                    'info' => 'Comma-separated list of tags associated with the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'customAttributes',
                    'type' => 'JSON',
                    'info' => 'JSON Object. The custom attributes you have set on the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'locationData',
                    'type' => 'JSON',
                    'info' => 'JSON Object, of Location, relating to the Lead.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateLead',
            'description' => 'Update lead.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'Identifier for the Lead.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'email',
                    'type' => 'String',
                    'info' => 'The email you have defined for the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'phone',
                    'type' => 'String',
                    'info' => 'The phone number you have defined for the lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'avatarImageUrl',
                    'type' => 'String',
                    'info' => 'An avatar URL for the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'userAgentData',
                    'type' => 'String',
                    'info' => 'Data about the last user agent the Lead was seen using.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenIp',
                    'type' => 'String',
                    'info' => 'An ip address.',
                    'required' => false,
                ),
                array (
                    'name' => 'companies',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects of companies.',
                    'required' => false,
                ),
                array (
                    'name' => 'socialProfiles',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects, of social profiles associated with the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'segments',
                    'type' => 'String',
                    'info' => 'Comma-separated list of segments the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'tags',
                    'type' => 'String',
                    'info' => 'Comma-separated list of tags associated with the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'customAttributes',
                    'type' => 'JSON',
                    'info' => 'JSON Object. The custom attributes you have set on the Lead.',
                    'required' => false,
                ),
                array (
                    'name' => 'locationData',
                    'type' => 'JSON',
                    'info' => 'JSON Object, of Location, relating to the Lead.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getLeads',
            'description' => 'Fetch a list of all leads.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getLeadsByEmail',
            'description' => 'Fetch all Leads with a given email.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'email',
                    'type' => 'String',
                    'info' => 'Email for fetch.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleLead',
            'description' => 'Fetch single lead.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'The lead identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'userIdType',
                    'type' => 'String',
                    'info' => 'The lead identifier type. One of: intercom_id, user_id, email.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'deleteLead',
            'description' => 'Delete lead.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'The lead identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'userIdType',
                    'type' => 'String',
                    'info' => 'The lead identifier type. One of: intercom_id, user_id.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'convertLeadToUser',
            'description' => 'Convert Lead to Users.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'leadId',
                    'type' => 'String',
                    'info' => 'The lead identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'leadIdType',
                    'type' => 'String',
                    'info' => 'The user identifier type. One of: intercom_id, user_id, email.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'Identifier of existing User.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'scrollLeads',
            'description' => 'Scroll over all Leads.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'scrollParam',
                    'type' => 'String',
                    'info' => 'Scroll parameter.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createCompany',
            'description' => 'Create company.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the company.',
                    'required' => true,
                ),
                array (
                    'name' => 'companyId',
                    'type' => 'String',
                    'info' => 'The company id you have defined for the company.',
                    'required' => true,
                ),
                array (
                    'name' => 'monthlySpend',
                    'type' => 'String',
                    'info' => 'How much revenue the company generates for your business.',
                    'required' => false,
                ),
                array (
                    'name' => 'plan',
                    'type' => 'String',
                    'info' => 'The name of the plan you have associated with the company.',
                    'required' => false,
                ),
                array (
                    'name' => 'customAttributes',
                    'type' => 'JSON',
                    'info' => 'JSON Object, a hash of key - value pairs containing any other data about the company you want Intercom to store.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateCompany',
            'description' => 'Update company.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'companyId',
                    'type' => 'String',
                    'info' => 'The company identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the company.',
                    'required' => false,
                ),
                array (
                    'name' => 'monthlySpend',
                    'type' => 'String',
                    'info' => 'How much revenue the company generates for your business.',
                    'required' => false,
                ),
                array (
                    'name' => 'plan',
                    'type' => 'String',
                    'info' => 'The name of the plan you have associated with the company.',
                    'required' => false,
                ),
                array (
                    'name' => 'customAttributes',
                    'type' => 'JSON',
                    'info' => 'JSON Object, a hash of key - value pairs containing any other data about the company you want Intercom to store.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getCompanies',
            'description' => 'Fetch a list of companies.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'Number',
                    'info' => 'What page of results to fetch.',
                    'required' => false,
                ),
                array (
                    'name' => 'perPage',
                    'type' => 'Number',
                    'info' => 'How many results per page.',
                    'required' => false,
                ),
                array (
                    'name' => 'order',
                    'type' => 'String',
                    'info' => 'Return the companies in ascending or descending order. One of: asc, desc.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getCompaniesByTag',
            'description' => 'Fetch tagged companies by tag.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'tagId',
                    'type' => 'String',
                    'info' => 'The identifier of the tag to filter by.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getCompaniesBySegment',
            'description' => 'Fetch segmented companies by segment.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'segmentId',
                    'type' => 'String',
                    'info' => 'The identifier of the segment to filter by.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleCompany',
            'description' => 'Fetch single company.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'companyId',
                    'type' => 'String',
                    'info' => 'The company identifier, you have given to the company.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getCompanyUsers',
            'description' => 'Fetch users that belong to a company.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'companyId',
                    'type' => 'String',
                    'info' => 'Your company identifier for the company.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'scrollCompanies',
            'description' => 'Scroll over all companies.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'scrollParam',
                    'type' => 'String',
                    'info' => 'Scroll parameter.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getAdmins',
            'description' => 'fetching App\'s admins.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getCurrentAdmin',
            'description' => 'Fetching current admin of app.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleAdmin',
            'description' => 'Fetching one admin of app.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'adminId',
                    'type' => 'String',
                    'info' => 'Admins identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createTag',
            'description' => 'Create tag.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the tag.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'updateTag',
            'description' => 'Update tag.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'The identifier of tag to updates.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'New name of the tag.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'tagUser',
            'description' => 'Add tag to User.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the tag.',
                    'required' => true,
                ),
                array (
                    'name' => 'users',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects, of users user_id, intercom identifier or email.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'untagUsers',
            'description' => 'Remove tag from User.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the tag.',
                    'required' => true,
                ),
                array (
                    'name' => 'users',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects, of users user_id, intercom identifier or email.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'tagCompany',
            'description' => 'Add tag to Company.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the tag.',
                    'required' => true,
                ),
                array (
                    'name' => 'companies',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects, of companies company_id or intercom identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'untagCompany',
            'description' => 'Remove tag from Company.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the tag.',
                    'required' => true,
                ),
                array (
                    'name' => 'companies',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects, of companies company_id or intercom identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'deleteTag',
            'description' => 'Delete tag.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'tagId',
                    'type' => 'String',
                    'info' => 'Tag identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getAppTags',
            'description' => 'Fetch tags of App.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSegments',
            'description' => 'Fetch list the user segments.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleSegment',
            'description' => 'Fetch single segments.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'segmentId',
                    'type' => 'String',
                    'info' => 'Segment identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createNote',
            'description' => 'Create a Note.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'User identifier the note is to be created about.',
                    'required' => true,
                ),
                array (
                    'name' => 'userIdType',
                    'type' => 'String',
                    'info' => 'The user identifier type. One of: intercom_id, user_id, email.',
                    'required' => true,
                ),
                array (
                    'name' => 'body',
                    'type' => 'String',
                    'info' => 'The text of the note.',
                    'required' => true,
                ),
                array (
                    'name' => 'adminId',
                    'type' => 'String',
                    'info' => 'The identifier of the admin creating the note.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getUserNotes',
            'description' => 'List Notes for a User.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'The user identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'userIdType',
                    'type' => 'String',
                    'info' => 'The user identifier type. One of: intercom_id, user_id, email.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleNote',
            'description' => 'Fetch single Note.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'noteId',
                    'type' => 'String',
                    'info' => 'The note identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'submitEvent',
            'description' => 'Submitting Events.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'eventName',
                    'type' => 'String',
                    'info' => 'The name of the event that occurred.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'Your identifier for the the user.',
                    'required' => true,
                ),
                array (
                    'name' => 'createdAt',
                    'type' => 'Number',
                    'info' => 'The time the event occurred as a UTC Unix timestamp.',
                    'required' => true,
                ),
                array (
                    'name' => 'metadata',
                    'type' => 'JSON',
                    'info' => 'JSON Object, metadata about the event.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getUserEvents',
            'description' => 'The events belonging to a user.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'The user identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getUserEventsSummaries',
            'description' => 'View User Event Summaries.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'The user identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getAppTotalCounts',
            'description' => 'Fetch app total counts.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'Type of counts. One of: user, company, conversation.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getAppConversationCount',
            'description' => 'Fetch app conversation count.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getAdminConversationsCount',
            'description' => 'Fetch admin conversations count.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getUserSegmensCount',
            'description' => 'Fetch user segmens count.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getUserTagsCount',
            'description' => 'Fetch user tags count.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getCompanySegmentsCount',
            'description' => 'Fetch company segments count.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getCompanyTagsCount',
            'description' => 'Fetch company tags count.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getCompanyUsersCount',
            'description' => 'Fetch company users count.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createAdminMessage',
            'description' => 'Create an admin initiated message to a user.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'fromAdminId',
                    'type' => 'String',
                    'info' => 'Admin identifier from whom send message.',
                    'required' => true,
                ),
                array (
                    'name' => 'receiverType',
                    'type' => 'String',
                    'info' => 'Receiver type. One of: user, contact.',
                    'required' => true,
                ),
                array (
                    'name' => 'receiverId',
                    'type' => 'String',
                    'info' => 'The receiver identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'receiverIdType',
                    'type' => 'String',
                    'info' => 'The receiver identifier type. One of: intercom_id, user_id, email.',
                    'required' => true,
                ),
                array (
                    'name' => 'messageType',
                    'type' => 'String',
                    'info' => 'The kind of message being created. One of: inapp, email.',
                    'required' => true,
                ),
                array (
                    'name' => 'subject',
                    'type' => 'String',
                    'info' => 'The title of the email.',
                    'required' => true,
                ),
                array (
                    'name' => 'body',
                    'type' => 'String',
                    'info' => 'The content of the message. Plaintext only, HTML is not supported.',
                    'required' => true,
                ),
                array (
                    'name' => 'template',
                    'type' => 'String',
                    'info' => 'The style of the outgoing message. Only valid for email messages. One of: plain, personal.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createUserMessage',
            'description' => 'Create user message.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'senderId',
                    'type' => 'String',
                    'info' => 'The sender identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'senderIdType',
                    'type' => 'String',
                    'info' => 'The sender identifier type. One of: intercom_id, user_id, email.',
                    'required' => true,
                ),
                array (
                    'name' => 'body',
                    'type' => 'String',
                    'info' => 'The content of the message. Plaintext only, HTML is not supported.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createContactMessage',
            'description' => 'Create contact message.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'senderId',
                    'type' => 'String',
                    'info' => 'The sender identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'senderIdType',
                    'type' => 'String',
                    'info' => 'The sender identifier type. One of: intercom_id, user_id.',
                    'required' => true,
                ),
                array (
                    'name' => 'body',
                    'type' => 'String',
                    'info' => 'The content of the message. Plaintext only, HTML is not supported.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getConversations',
            'description' => 'Fetch a list of all conversations.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleAdminConversations',
            'description' => 'Fetch conversations for single admin.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'adminId',
                    'type' => 'String',
                    'info' => 'Admin identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'open',
                    'type' => 'Boolean',
                    'info' => 'when true fetches just open conversations, when false just closed conversations.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getSingleUserConversations',
            'description' => 'Fetch conversations with single user.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'The user identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'userIdType',
                    'type' => 'String',
                    'info' => 'The user identifier type. One of: intercom_user_id, user_id, email.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleConversation',
            'description' => 'Fetch single conversation.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'conversationId',
                    'type' => 'String',
                    'info' => 'Conversation identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'replyToUserComment',
            'description' => 'Replying to a Conversation.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'conversationId',
                    'type' => 'String',
                    'info' => 'Conversation identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'body',
                    'type' => 'String',
                    'info' => 'The text body of the comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'The user identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'userIdType',
                    'type' => 'String',
                    'info' => 'The user identifier type. One of: intercom_user_id, user_id, email.',
                    'required' => true,
                ),
                array (
                    'name' => 'attachmentUrls',
                    'type' => 'Array',
                    'info' => 'Array of Strings of URLs of files that will be added as attachments. You can include up to 5 attachments.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'replyToAdminComment',
            'description' => 'Reply to admin comment.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'conversationId',
                    'type' => 'String',
                    'info' => 'Conversation identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'adminId',
                    'type' => 'String',
                    'info' => 'The identifier of the Admin who is authoring the comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'body',
                    'type' => 'String',
                    'info' => 'The text body of the comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'attachmentUrls',
                    'type' => 'Array',
                    'info' => 'Array of Strings of URLs of files that will be added as attachments. You can include up to 5 attachments.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'replyToUsersLastConversation',
            'description' => 'Reply to users last conversation.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'intercomUserId',
                    'type' => 'String',
                    'info' => 'The user identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'adminId',
                    'type' => 'String',
                    'info' => 'The identifier of the Admin who is replying.',
                    'required' => true,
                ),
                array (
                    'name' => 'body',
                    'type' => 'String',
                    'info' => 'The text body of the comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'attachmentUrls',
                    'type' => 'Array',
                    'info' => 'Array of Strings of URLs of files that will be added as attachments. You can include up to 5 attachments.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'markConversationAsRead',
            'description' => 'Marking a Conversation as Read.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'conversationId',
                    'type' => 'String',
                    'info' => 'Conversation identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'closeConversation',
            'description' => 'Closing a conversation.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'conversationId',
                    'type' => 'String',
                    'info' => 'Conversation identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'adminId',
                    'type' => 'String',
                    'info' => 'Admin identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleVisitor',
            'description' => 'Fetch single visitor.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'Visitor user identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'userIdType',
                    'type' => 'String',
                    'info' => 'Visitor user identifier type. One of: intercom_id, user_id.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'updateVisitor',
            'description' => 'Update a Visitor.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'User identifier for the Visitor.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The name of the Visitor.',
                    'required' => false,
                ),
                array (
                    'name' => 'customAttributes',
                    'type' => 'JSON',
                    'info' => 'JSON Object, the custom attributes you have set on the Visitor.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastRequestAt',
                    'type' => 'Number',
                    'info' => 'The date the lead last visited your application, UNIX timestamp.',
                    'required' => false,
                ),
                array (
                    'name' => 'avatarImageUrl',
                    'type' => 'String',
                    'info' => 'An avatar image URL for the Visitor.',
                    'required' => false,
                ),
                array (
                    'name' => 'unsubscribedFromEmails',
                    'type' => 'Boolean',
                    'info' => 'Whether the Visitor is unsubscribed from emails.',
                    'required' => false,
                ),
                array (
                    'name' => 'locationData',
                    'type' => 'JSON',
                    'info' => 'JSON Object. Location relating to the Visitor.',
                    'required' => false,
                ),
                array (
                    'name' => 'userAgentData',
                    'type' => 'String',
                    'info' => 'Data about the last user agent the Visitor was seen using.',
                    'required' => false,
                ),
                array (
                    'name' => 'lastSeenIp',
                    'type' => 'String',
                    'info' => 'An ip address.',
                    'required' => false,
                ),
                array (
                    'name' => 'socialProfiles',
                    'type' => 'Array',
                    'info' => 'Array of JSON objects, of social profiles associated with the Visitor.',
                    'required' => false,
                ),
                array (
                    'name' => 'segments',
                    'type' => 'String',
                    'info' => 'Comma-separated list of segments the Visitor.',
                    'required' => false,
                ),
                array (
                    'name' => 'tags',
                    'type' => 'String',
                    'info' => 'Comma-separated list of tags associated with the Visitor.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteVisitor',
            'description' => 'Delete a visitor.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'String',
                    'info' => 'User identifier for the Visitor.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'convertVisitorToLead',
            'description' => 'Convert Visitor to Leads.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'visitorUserId',
                    'type' => 'String',
                    'info' => 'User identifier for the Visitor.',
                    'required' => true,
                ),
                array (
                    'name' => 'visitorUserIdType',
                    'type' => 'String',
                    'info' => 'The Visitor user identifier of type. One of: intercom_id, user_id, email.',
                    'required' => true,
                ),
                array (
                    'name' => 'leadId',
                    'type' => 'String',
                    'info' => 'User identifier for the Lead to binding.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createSubscription',
            'description' => 'Create new subscription.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'url',
                    'type' => 'String',
                    'info' => 'The url the event should be sent to.',
                    'required' => true,
                ),
                array (
                    'name' => 'topics',
                    'type' => 'String',
                    'info' => 'Comma-separated list of topics to subscribe to.',
                    'required' => true,
                ),
                array (
                    'name' => 'serviceType',
                    'type' => 'String',
                    'info' => 'The type of the service being called. Default is web.',
                    'required' => false,
                ),
                array (
                    'name' => 'hubSecret',
                    'type' => 'String',
                    'info' => 'A key used to sign notifications.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getSingleSubscription',
            'description' => 'Fetch single subscription.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subscriptionId',
                    'type' => 'String',
                    'info' => 'Subscription identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSubscriptions',
            'description' => 'Fetch list of subscriptions.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getErrorFeed',
            'description' => 'Fetch feed of errors returned by the webhook.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subscriptionId',
                    'type' => 'String',
                    'info' => 'Subscription identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSentFeed',
            'description' => 'Fetch feed of notifications sent.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subscriptionId',
                    'type' => 'String',
                    'info' => 'Subscription identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'pingSubscription',
            'description' => 'Ping subscription.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subscriptionId',
                    'type' => 'String',
                    'info' => 'Subscription identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createEventWebhookSubscription',
            'description' => 'Create an Event Webhook Subscription.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'metadataEventNames',
                    'type' => 'String',
                    'info' => 'Comma-separated list of events name to subscribe to.',
                    'required' => true,
                ),
                array (
                    'name' => 'url',
                    'type' => 'String',
                    'info' => 'The url the event should be sent to.',
                    'required' => true,
                ),
                array (
                    'name' => 'serviceType',
                    'type' => 'String',
                    'info' => 'The type of the service being called. Default is web.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateEventWebhookSubscription',
            'description' => 'Update an Event Webhook Subscription.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'metadataEventNames',
                    'type' => 'String',
                    'info' => 'Comma-separated list of events name to subscribe to.',
                    'required' => true,
                ),
                array (
                    'name' => 'url',
                    'type' => 'String',
                    'info' => 'The url the event should be sent to.',
                    'required' => true,
                ),
                array (
                    'name' => 'serviceType',
                    'type' => 'String',
                    'info' => 'The type of the service being called. Default is web.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createUserBulkJobs',
            'description' => 'Creating bulk jobs for users.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'items',
                    'type' => 'Array',
                    'info' => 'Array of object, of users tasks.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createBulkLeadJob',
            'description' => 'Bulk Lead Posting.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'items',
                    'type' => 'Array',
                    'info' => 'Array of object, of Leads.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createBulkEventJob',
            'description' => 'Bulk Event Posting.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'items',
                    'type' => 'Array',
                    'info' => 'Array of object, of Events.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getSingleBulkJob',
            'description' => 'Fetch single job.',
            'args' => array (
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'jobId',
                    'type' => 'String',
                    'info' => 'Bulk job identifier.',
                    'required' => true,
                ),
            ),
        ),
    ),
    'custom' => array (
        'getAccessToken' => array (
            'dictionary' => array (
                'clientId' => 'client_id',
                'clientSecret' => 'client_secret',
                'code' => 'code',
            ),
            'vendorUrl' => 'https://api.intercom.io/auth/eagle/token',
            'method' => 'POST',
        ),
        'createUserByEmail' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'email' => 'email',
                'userId' => 'user_id',
                'phone' => 'phone',
                'name' => 'name',
                'lastSeenIp' => 'last_seen_ip',
                'customAttributes' => 'custom_attributes',
                'lastSeenUserAgent' => 'last_seen_user_agent',
                'companies' => 'companies',
                'lastRequestAt' => 'last_request_at',
                'updateLastRequestAt' => 'update_last_request_at',
                'newSession' => 'new_session',
            ),
            'vendorUrl' => 'https://api.intercom.io/users',
            'method' => 'POST',
        ),
        'createUserById' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'user_id',
                'email' => 'email',
                'phone' => 'phone',
                'name' => 'name',
                'lastSeenIp' => 'last_seen_ip',
                'customAttributes' => 'custom_attributes',
                'lastSeenUserAgent' => 'last_seen_user_agent',
                'companies' => 'companies',
                'lastRequestAt' => 'last_request_at',
                'updateLastRequestAt' => 'update_last_request_at',
                'newSession' => 'new_session',
            ),
            'vendorUrl' => 'https://api.intercom.io/users',
            'method' => 'POST',
        ),
        'updateUserByEmail' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'email' => 'email',
                'userId' => 'user_id',
                'phone' => 'phone',
                'name' => 'name',
                'lastSeenIp' => 'last_seen_ip',
                'customAttributes' => 'custom_attributes',
                'lastSeenUserAgent' => 'last_seen_user_agent',
                'companies' => 'companies',
                'lastRequestAt' => 'last_request_at',
                'updateLastRequestAt' => 'update_last_request_at',
                'newSession' => 'new_session',
            ),
            'vendorUrl' => 'https://api.intercom.io/users',
            'method' => 'POST',
        ),
        'updateUserById' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'user_id',
                'email' => 'email',
                'phone' => 'phone',
                'name' => 'name',
                'lastSeenIp' => 'last_seen_ip',
                'customAttributes' => 'custom_attributes',
                'lastSeenUserAgent' => 'last_seen_user_agent',
                'companies' => 'companies',
                'lastRequestAt' => 'last_request_at',
                'updateLastRequestAt' => 'update_last_request_at',
                'newSession' => 'new_session',
            ),
            'vendorUrl' => 'https://api.intercom.io/users',
            'method' => 'POST',
        ),
        'getUsers' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'page' => 'page',
                'perPage' => 'per_page',
                'order' => 'order',
                'sort' => 'sort',
                'createdSince' => 'created_since',
            ),
            'vendorUrl' => 'https://api.intercom.io/users',
            'method' => 'GET',
        ),
        'getUsersByTag' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'tagId' => 'tag_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/users',
            'method' => 'GET',
        ),
        'getUsersBySegment' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'segmentId' => 'segment_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/users',
            'method' => 'GET',
        ),
        'getSingleUser' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'userId',
                'userIdType' => 'userIdType',
            ),
            'vendorUrl' => 'https://api.intercom.io/users',
            'method' => 'GET-RAW',
            'custom' => true,
        ),
        'deleteUser' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'userId',
                'userIdType' => 'userIdType',
            ),
            'vendorUrl' => 'https://api.intercom.io/users',
            'method' => 'DELETE-RAW',
            'custom' => true,
        ),
        'scrollUsers' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'scrollParam' => 'scroll_param',
            ),
            'vendorUrl' => 'https://api.intercom.io/users/scroll',
            'method' => 'GET',
        ),
        'createLead' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'name' => 'name',
                'userId' => 'user_id',
                'email' => 'email',
                'phone' => 'phone',
                'avatarImageUrl' => 'avatar_image_url',
                'userAgentData' => 'user_agent_data',
                'lastSeenIp' => 'last_seen_ip',
                'companies' => 'companies',
                'socialProfiles' => 'social_profiles',
                'segments' => 'segments',
                'tags' => 'tags',
                'customAttributes' => 'custom_attributes',
                'locationData' => 'location_data',
            ),
            'vendorUrl' => 'https://api.intercom.io/contacts',
            'method' => 'POST',
            'custom' => true,
        ),
        'updateLead' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'user_id',
                'name' => 'name',
                'email' => 'email',
                'phone' => 'phone',
                'avatarImageUrl' => 'avatar_image_url',
                'userAgentData' => 'user_agent_data',
                'lastSeenIp' => 'last_seen_ip',
                'companies' => 'companies',
                'socialProfiles' => 'social_profiles',
                'segments' => 'segments',
                'tags' => 'tags',
                'customAttributes' => 'custom_attributes',
                'locationData' => 'location_data',
            ),
            'vendorUrl' => 'https://api.intercom.io/contacts',
            'method' => 'POST',
            'custom' => true,
        ),
        'getLeads' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/contacts',
            'method' => 'GET',
        ),
        'getLeadsByEmail' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'email' => 'email',
            ),
            'vendorUrl' => 'https://api.intercom.io/contacts',
            'method' => 'GET',
        ),
        'getSingleLead' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'userId',
                'userIdType' => 'userIdType',
            ),
            'vendorUrl' => 'https://api.intercom.io/contacts',
            'method' => 'GET-RAW',
            'custom' => true,
        ),
        'deleteLead' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'userId',
                'userIdType' => 'userIdType',
            ),
            'vendorUrl' => 'https://api.intercom.io/contacts',
            'method' => 'DELETE-RAW',
            'custom' => true,
        ),
        'convertLeadToUser' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'leadId' => 'leadId',
                'leadIdType' => 'leadIdType',
                'userId' => 'user_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/contacts/convert',
            'method' => 'POST',
            'custom' => true,
        ),
        'scrollLeads' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'scrollParam' => 'scroll_param',
            ),
            'vendorUrl' => 'https://api.intercom.io/contacts/scroll',
            'method' => 'GET',
        ),
        'createCompany' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'name' => 'name',
                'companyId' => 'company_id',
                'monthlySpend' => 'monthly_spend',
                'plan' => 'plan',
                'customAttributes' => 'custom_attributes',
            ),
            'vendorUrl' => 'https://api.intercom.io/companies',
            'method' => 'POST',
        ),
        'updateCompany' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'companyId' => 'company_id',
                'name' => 'name',
                'monthlySpend' => 'monthly_spend',
                'plan' => 'plan',
                'customAttributes' => 'custom_attributes',
            ),
            'vendorUrl' => 'https://api.intercom.io/companies',
            'method' => 'POST',
        ),
        'getCompanies' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'page' => 'page',
                'perPage' => 'per_page',
                'order' => 'order',
            ),
            'vendorUrl' => 'https://api.intercom.io/companies',
            'method' => 'GET',
        ),
        'getCompaniesByTag' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'tagId' => 'tag_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/companies',
            'method' => 'GET',
        ),
        'getCompaniesBySegment' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'segmentId' => 'segment_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/companies',
            'method' => 'GET',
        ),
        'getSingleCompany' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'companyId' => 'company_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/companies',
            'method' => 'GET',
        ),
        'getCompanyUsers' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'companyId' => 'company_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/companies',
            'method' => 'GET',
            'default' => array (
                'type' => 'user',
            ),
        ),
        'scrollCompanies' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'scrollParam' => 'scroll_param',
            ),
            'vendorUrl' => 'https://api.intercom.io/companies/scroll',
            'method' => 'GET',
        ),
        'getAdmins' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/admins',
            'method' => 'GET',
        ),
        'getCurrentAdmin' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/me',
            'method' => 'GET',
        ),
        'getSingleAdmin' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'adminId' => 'adminId',
            ),
            'vendorUrl' => 'https://api.intercom.io/admins/{{adminId}}',
            'method' => 'GET',
        ),
        'createTag' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'name' => 'name',
            ),
            'vendorUrl' => 'https://api.intercom.io/tags',
            'method' => 'POST',
        ),
        'updateTag' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'id' => 'id',
                'name' => 'name',
            ),
            'vendorUrl' => 'https://api.intercom.io/tags',
            'method' => 'POST',
        ),
        'tagUser' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'name' => 'name',
                'users' => 'users',
            ),
            'vendorUrl' => 'https://api.intercom.io/tags',
            'method' => 'POST',
        ),
        'untagUsers' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'name' => 'name',
                'users' => 'users',
            ),
            'vendorUrl' => 'https://api.intercom.io/tags',
            'method' => 'POST',
        ),
        'tagCompany' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'name' => 'name',
                'companies' => 'companies',
            ),
            'vendorUrl' => 'https://api.intercom.io/tags',
            'method' => 'POST',
        ),
        'untagCompany' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'name' => 'name',
                'companies' => 'companies',
            ),
            'vendorUrl' => 'https://api.intercom.io/tags',
            'method' => 'POST',
        ),
        'deleteTag' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'tagId' => 'tagId',
            ),
            'vendorUrl' => 'https//api.intercom.io/tags/{{tagId}}',
            'method' => 'DELETE',
        ),
        'getAppTags' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/tags',
            'method' => 'GET',
        ),
        'getSegments' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/segments',
            'method' => 'GET',
            'default' => array (
                'type' => 'company',
            ),
        ),
        'getSingleSegment' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'segmentId' => 'segmentId',
            ),
            'vendorUrl' => 'https://api.intercom.io/segments/{{segmentId}}',
            'method' => 'GET',
        ),
        'createNote' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'userId',
                'userIdType' => 'userIdType',
                'body' => 'body',
                'adminId' => 'admin_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/notes',
            'method' => 'POST',
            'custom' => true,
        ),
        'getUserNotes' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'userId',
                'userIdType' => 'userIdType',
            ),
            'vendorUrl' => 'https://api.intercom.io/notes',
            'method' => 'GET-RAW',
            'custom' => true,
        ),
        'getSingleNote' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'noteId' => 'noteId',
            ),
            'vendorUrl' => 'https://api.intercom.io/notes/{{noteId}}',
            'method' => 'GET',
        ),
        'submitEvent' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'eventName' => 'event_name',
                'userId' => 'user_id',
                'createdAt' => 'created_at',
                'metadata' => 'metadata',
            ),
            'vendorUrl' => 'https://api.intercom.io/events',
            'method' => 'POST',
        ),
        'getUserEvents' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'user_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/events',
            'method' => 'GET',
            'default' => array (
                'type' => 'user',
            ),
        ),
        'getUserEventsSummaries' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'user_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/events',
            'method' => 'GET',
            'default' => array (
                'type' => 'user',
                'summary' => true,
            ),
        ),
        'getAppTotalCounts' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'type' => 'type',
            ),
            'vendorUrl' => 'https://api.intercom.io/counts',
            'method' => 'GET',
        ),
        'getAppConversationCount' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/counts',
            'method' => 'GET',
            'default' => array (
                'type' => 'conversation',
            ),
        ),
        'getAdminConversationsCount' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/counts',
            'method' => 'GET',
            'default' => array (
                'type' => 'conversation',
                'count' => 'admin',
            ),
        ),
        'getUserSegmensCount' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/counts',
            'method' => 'GET',
            'default' => array (
                'type' => 'user',
                'count' => 'segment',
            ),
        ),
        'getUserTagsCount' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/counts',
            'method' => 'GET',
            'default' => array (
                'type' => 'user',
                'count' => 'tag',
            ),
        ),
        'getCompanySegmentsCount' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/counts',
            'method' => 'GET',
            'default' => array (
                'type' => 'company',
                'count' => 'segment',
            ),
        ),
        'getCompanyTagsCount' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/counts',
            'method' => 'GET',
            'default' => array (
                'type' => 'company',
                'count' => 'tag',
            ),
        ),
        'getCompanyUsersCount' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/counts',
            'method' => 'GET',
            'default' => array (
                'type' => 'company',
                'count' => 'user',
            ),
        ),
        'createAdminMessage' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'fromAdminId' => 'fromAdminId',
                'receiverType' => 'receiverType',
                'receiverId' => 'receiverId',
                'receiverIdType' => 'receiverIdType',
                'messageType' => 'message_type',
                'subject' => 'subject',
                'body' => 'body',
                'template' => 'template',
            ),
            'vendorUrl' => 'https://api.intercom.io/messages',
            'method' => 'POST',
            'custom' => true,
        ),
        'createUserMessage' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'senderId' => 'senderId',
                'senderIdType' => 'senderIdType',
                'body' => 'body',
            ),
            'vendorUrl' => 'https://api.intercom.io/messages',
            'method' => 'POST',
            'custom' => true,
        ),
        'createContactMessage' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'senderId' => 'senderId',
                'senderIdType' => 'senderIdType',
                'body' => 'body',
            ),
            'vendorUrl' => 'https://api.intercom.io/messages',
            'method' => 'POST',
            'custom' => true,
        ),
        'getConversations' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/conversations',
            'method' => 'GET',
        ),
        'getSingleAdminConversations' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'adminId' => 'admin_id',
                'open' => 'open',
            ),
            'vendorUrl' => 'https://api.intercom.io/conversations',
            'method' => 'GET',
            'default' => array (
                'type' => 'admin',
            ),
        ),
        'getSingleUserConversations' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'userId',
                'userIdType' => 'userIdType',
            ),
            'vendorUrl' => 'https://api.intercom.io/conversations',
            'method' => 'GET',
            'custom' => true,
        ),
        'getSingleConversation' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'conversationId' => 'conversationId',
            ),
            'vendorUrl' => 'https://api.intercom.io/conversations/{{conversationId}}',
            'method' => 'GET',
        ),
        'replyToUserComment' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'conversationId' => 'conversationId',
                'body' => 'body',
                'userId' => 'userId',
                'userIdType' => 'userIdType',
                'attachmentUrls' => 'attachment_urls',
            ),
            'vendorUrl' => 'https://api.intercom.io/conversations/{{conversationId}}/reply',
            'method' => 'POST',
            'custom' => true,
        ),
        'replyToAdminComment' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'conversationId' => 'conversationId',
                'adminId' => 'admin_id',
                'body' => 'body',
                'attachmentUrls' => 'attachment_urls',
            ),
            'vendorUrl' => 'https://api.intercom.io/conversations/{{conversationId}}/reply',
            'method' => 'POST',
            'default' => array (
                'type' => 'admin',
                'message_type' => 'comment',
            ),
        ),
        'replyToUsersLastConversation' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'intercomUserId' => 'intercom_user_id',
                'adminId' => 'admin_id',
                'body' => 'body',
                'attachmentUrls' => 'attachment_urls',
            ),
            'vendorUrl' => 'https://api.intercom.io/conversations/last/reply',
            'method' => 'POST',
            'default' => array (
                'type' => 'admin',
                'message_type' => 'comment',
            ),
        ),
        'markConversationAsRead' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'conversationId' => 'conversationId',
            ),
            'vendorUrl' => 'https://api.intercom.io/conversations/{{conversationId}}',
            'method' => 'PUT',
            'default' => array (
                'read' => true,
            ),
        ),
        'closeConversation' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'conversationId' => 'conversationId',
                'adminId' => 'admin_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/conversations/{{conversationId}}/reply',
            'method' => 'POST',
            'default' => array (
                'message_type' => 'close',
                'type' => 'admin',
            ),
        ),
        'getSingleVisitor' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'userId',
                'userIdType' => 'userIdType',
            ),
            'vendorUrl' => 'https://api.intercom.io/visitors',
            'method' => 'GET-RAW',
            'custom' => true,
        ),
        'updateVisitor' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'user_id',
                'name' => 'name',
                'customAttributes' => 'custom_attributes',
                'lastRequestAt' => 'last_request_at',
                'avatarImageUrl' => 'avatar_image_url',
                'unsubscribedFromEmails' => 'unsubscribed_from_emails',
                'locationData' => 'location_data',
                'userAgentData' => 'user_agent_data',
                'lastSeenIp' => 'last_seen_ip',
                'socialProfiles' => 'social_profiles',
                'segments' => 'segments',
                'tags' => 'tags',
            ),
            'vendorUrl' => 'https://api.intercom.io/visitors',
            'method' => 'PUT',
            'custom' => true,
        ),
        'deleteVisitor' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'userId' => 'user_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/visitors',
            'method' => 'DELETE',
            'default' => array (
                'type' => 'visitor',
            ),
        ),
        'convertVisitorToLead' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'visitorId' => 'visitor_id',
                'visitorUserId' => 'visitorUserId',
                'visitorUserIdType' => 'visitorUserIdType',
                'leadId' => 'lead_id',
            ),
            'vendorUrl' => 'https://api.intercom.io/visitors/convert',
            'method' => 'POST',
            'custom' => true,
        ),
        'createSubscription' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'url' => 'url',
                'topics' => 'topics',
                'serviceType' => 'service_type',
                'hubSecret' => 'hub_secret',
            ),
            'vendorUrl' => 'https://api.intercom.io/subscriptions',
            'method' => 'POST',
            'custom' => true,
        ),
        'getSingleSubscription' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'subscriptionId' => 'subscriptionId',
            ),
            'vendorUrl' => 'https://api.intercom.io/subscriptions/{{subscriptionId}}',
            'method' => 'GET',
        ),
        'getSubscriptions' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
            ),
            'vendorUrl' => 'https://api.intercom.io/subscriptions',
            'method' => 'GET',
        ),
        'getErrorFeed' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'subscriptionId' => 'subscriptionId',
            ),
            'vendorUrl' => 'https://api.intercom.io/subscriptions/{{subscriptionId}}/error',
            'method' => 'GET',
        ),
        'getSentFeed' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'subscriptionId' => 'subscriptionId',
            ),
            'vendorUrl' => 'https://api.intercom.io/subscriptions/{{subscriptionId}}/sent',
            'method' => 'GET',
        ),
        'pingSubscription' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'subscriptionId' => 'subscriptionId',
            ),
            'vendorUrl' => 'https://api.intercom.io/subscriptions/{{subscriptionId}}/ping',
            'method' => 'POST',
        ),
        'createEventWebhookSubscription' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'metadataEventNames' => 'metadata_event_names',
                'url' => 'url',
                'serviceType' => 'service_type',
            ),
            'vendorUrl' => 'https://api.intercom.io/subscriptions',
            'method' => 'POST',
            'custom' => true,
        ),
        'updateEventWebhookSubscription' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'metadataEventNames' => 'metadata_event_names',
                'url' => 'url',
                'serviceType' => 'service_type',
            ),
            'vendorUrl' => 'https://api.intercom.io/subscriptions',
            'method' => 'POST',
            'custom' => true,
        ),
        'createUserBulkJobs' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'items' => 'items',
            ),
            'vendorUrl' => 'https://api.intercom.io/bulk/users',
            'method' => 'POST',
        ),
        'createBulkLeadJob' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'items' => 'items',
            ),
            'vendorUrl' => 'https://api.intercom.io/bulk/contacts',
            'method' => 'POST',
        ),
        'createBulkEventJob' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'items' => 'items',
            ),
            'vendorUrl' => 'https://api.intercom.io/bulk/events',
            'method' => 'POST',
        ),
        'getSingleBulkJob' => array (
            'dictionary' => array (
                'accessToken' => 'accessToken',
                'jobId' => 'jobId',
            ),
            'vendorUrl' => 'https://api.intercom.io/jobs/{{jobId}}',
            'method' => 'GET',
        ),
    ),
);