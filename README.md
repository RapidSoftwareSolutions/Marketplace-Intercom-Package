[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Intercom/functions?utm_source=RapidAPIGitHub_IntercomFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Intercom Package
Connect to the Intercom Customer Service API to access data and build integrations for this chat app. Test an API call and export the code snippet into your app.
* Domain: intercom.com
* Credentials: clientId, clientSecret

## How to get credentials: 
0. Item one 
1. Item two 

## Intercom.getAccessToken
Fetch access token.

| Field       | Type  | Description
|-------------|-------|----------
| clientId    | String| Client identifier from your credentials.
| clientSecret| String| Client secret from your credentials.
| code        | String| This is automatically passed by the redirect.

## Intercom.createUserByEmail
Create user by email.

| Field              | Type   | Description
|--------------------|--------|----------
| accessToken        | String | Access token.
| email              | String | The user's email address.
| userId             | String | A unique string identifier for the user.
| phone              | String | The user's phone number.
| name               | String | The user's full name.
| lastSeenIp         | String | An ip address.
| customAttributes   | JSON   | JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String | The user agent the user last visited your application with.
| companies          | Array  | Array of JSON objects of companies. Example: [{"company_id" : "366","name" : "Serenity","monthly_spend" : 500}].
| lastRequestAt      | Number | The date the user last visited your application, UNIX timestamp.
| updateLastRequestAt| Boolean| If true, instructs Intercom to update the user's last_request_at value.
| newSession         | Boolean| If true, instructs Intercom to register the request as a session.

## Intercom.createUserById
Create user by identifier.

| Field              | Type   | Description
|--------------------|--------|----------
| accessToken        | String | Access token.
| userId             | String | A unique string identifier for the user.
| email              | String | The user's email address.
| phone              | String | The user's phone number.
| name               | String | The user's full name.
| lastSeenIp         | String | An ip address.
| customAttributes   | JSON   | JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String | The user agent the user last visited your application with.
| companies          | Array  | Array of JSON objects of companies. Example: [{"company_id" : "366","name" : "Serenity","monthly_spend" : 500}].
| lastRequestAt      | Number | The date the user last visited your application, UNIX timestamp.
| updateLastRequestAt| Boolean| If true, instructs Intercom to update the user's last_request_at value.
| newSession         | Boolean| If true, instructs Intercom to register the request as a session.

## Intercom.updateUserByEmail
Update user by email.

| Field              | Type   | Description
|--------------------|--------|----------
| accessToken        | String | Access token.
| email              | String | The user's email address.
| userId             | String | A unique string identifier for the user.
| phone              | String | The user's phone number.
| name               | String | The user's full name.
| lastSeenIp         | String | An ip address.
| customAttributes   | JSON   | JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String | The user agent the user last visited your application with.
| companies          | Array  | Array of JSON objects of companies. Example: [{"company_id" : "366","name" : "Serenity","monthly_spend" : 500}].
| lastRequestAt      | Number | The date the user last visited your application, UNIX timestamp.
| updateLastRequestAt| Boolean| If true, instructs Intercom to update the user's last_request_at value.
| newSession         | Boolean| If true, instructs Intercom to register the request as a session.

## Intercom.updateUserById
Update user by identifier.

| Field              | Type   | Description
|--------------------|--------|----------
| accessToken        | String | Access token.
| userId             | String | A unique string identifier for the user.
| email              | String | The user's email address.
| phone              | String | The user's phone number.
| name               | String | The user's full name.
| lastSeenIp         | String | An ip address.
| customAttributes   | JSON   | JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String | The user agent the user last visited your application with.
| companies          | Array  | Array of JSON objects of companies. Example: [{"company_id" : "366","name" : "Serenity","monthly_spend" : 500}].
| lastRequestAt      | Number | The date the user last visited your application, UNIX timestamp.
| updateLastRequestAt| Boolean| If true, instructs Intercom to update the user's last_request_at value.
| newSession         | Boolean| If true, instructs Intercom to register the request as a session.

## Intercom.getUsers
Fetch a list of users.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| page        | String| what page of results to fetch.
| perPage     | String| how many results per page.
| order       | String| Return the users in ascending or descending order. One of: asc, desc.
| sort        | String| what field to sort the results by. One of: created_at, last_request_at, signed_up_at, updated_at.
| createdSince| String| limit results to users that were created in that last number of days.

## Intercom.getUsersByTag
Fetch segmented users or leads by tag.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| tagId      | String| The identifier of the tag to filter by.

## Intercom.getUsersBySegment
Fetch segmented users or leads by segment.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| segmentId  | String| The identifier of the segment to filter by.

## Intercom.getSingleUser
Retrieve user by identifier.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The user identifier.
| userIdType | String| The user identifier type. One of: intercom_id, user_id, email.

## Intercom.deleteUser
Delete user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The user identifier.
| userIdType | String| The user identifier type. One of: intercom_id, user_id, email.

## Intercom.scrollUsers
Scroll over all users.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| scrollParam| String| Scroll parameter.

## Intercom.createLead
Create lead.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| Access token.
| name            | String| The name of the Lead.
| userId          | String| Identifier for the Lead.
| email           | String| The email you have defined for the Lead.
| phone           | String| The phone number you have defined for the lead.
| avatarImageUrl  | String| An avatar URL for the Lead.
| userAgentData   | String| Data about the last user agent the Lead was seen using.
| lastSeenIp      | String| An ip address.
| companies       | Array | Array of JSON objects of companies. Example: [{"company_id" : "366","name" : "Serenity","monthly_spend" : 500}].
| socialProfiles  | Array | Array of JSON objects, of social profiles associated with the Lead. Example: [{"name": "Twitter","id": "1235d3213","username": "th1sland","url": "http://twitter.com/th1sland"}].
| segments        | String| Comma-separated list of segments the Lead.
| tags            | String| Comma-separated list of tags associated with the Lead.
| customAttributes| JSON  | JSON Object. The custom attributes you have set on the Lead.
| locationData    | JSON  | JSON Object, of Location, relating to the Lead.

## Intercom.updateLead
Update lead.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| Access token.
| userId          | String| Identifier for the Lead.
| name            | String| The name of the Lead.
| email           | String| The email you have defined for the Lead.
| phone           | String| The phone number you have defined for the lead.
| avatarImageUrl  | String| An avatar URL for the Lead.
| userAgentData   | String| Data about the last user agent the Lead was seen using.
| lastSeenIp      | String| An ip address.
| companies       | Array | Array of JSON objects of companies. Example: [{"company_id" : "366","name" : "Serenity","monthly_spend" : 500}].
| socialProfiles  | Array | Array of JSON objects, of social profiles associated with the Lead. Example: [{"name": "Twitter","id": "1235d3213","username": "th1sland","url": "http://twitter.com/th1sland"}].
| segments        | String| Comma-separated list of segments the Lead.
| tags            | String| Comma-separated list of tags associated with the Lead.
| customAttributes| JSON  | JSON Object. The custom attributes you have set on the Lead.
| locationData    | JSON  | JSON Object, of Location, relating to the Lead.

## Intercom.getLeads
Fetch a list of all leads.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getLeadsByEmail
Fetch all Leads with a given email.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| email      | String| Email for fetch.

## Intercom.getSingleLead
Fetch single lead.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The lead identifier.
| userIdType | String| The lead identifier type. One of: intercom_id, user_id, email.

## Intercom.deleteLead
Delete lead.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The lead identifier.
| userIdType | String| The lead identifier type. One of: intercom_id, user_id, email.

## Intercom.convertLeadToUser
Convert Lead to Users.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| leadId     | String| The lead identifier.
| leadIdType | String| The user identifier type. One of: intercom_id, user_id, email.
| userId     | String| Identifier of existing User.

## Intercom.scrollLeads
Scroll over all Leads.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| scrollParam| String| Scroll parameter.

## Intercom.createCompany
Create company.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| Access token.
| name            | String| The name of the company.
| monthlySpend    | String| How much revenue the company generates for your business.
| plan            | String| The name of the plan you have associated with the company.
| customAttributes| JSON  | JSON Object, a hash of key - value pairs containing any other data about the company you want Intercom to store.

## Intercom.updateCompany
Update company.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| Access token.
| companyId       | String| The company identifier.
| name            | String| The name of the company.
| monthlySpend    | String| How much revenue the company generates for your business.
| plan            | String| The name of the plan you have associated with the company.
| customAttributes| JSON  | JSON Object, a hash of key - value pairs containing any other data about the company you want Intercom to store.

## Intercom.getCompanies
Fetch a list of companies.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| page       | Number| What page of results to fetch.
| perPage    | Number| How many results per page.
| order      | String| Return the companies in ascending or descending order. One of: asc, desc.

## Intercom.getCompaniesByTag
Fetch tagged companies by tag.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| tagId      | String| The identifier of the tag to filter by.

## Intercom.getCompaniesBySegment
Fetch segmented companies by segment.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| segmentId  | String| The identifier of the segment to filter by.

## Intercom.getSingleCompany
Fetch single company.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| companyId  | String| The company identifier, you have given to the company.

## Intercom.getCompanyUsers
Fetch users that belong to a company.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| companyId  | String| Your company identifier for the company.

## Intercom.scrollCompanies
Scroll over all companies.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| scrollParam| String| Scroll parameter.

## Intercom.getAdmins
fetching App's admins.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getCurrentAdmin
Fetching current admin of app.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getSingleAdmin
Fetching one admin of app.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| adminId    | String| Admins identifier.

## Intercom.createTag
Create tag.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| The name of the tag.

## Intercom.updateTag
Update tag.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| id         | String| The identifier of tag to updates.
| name       | String| New name of the tag.

## Intercom.tagUser
Add tag to User.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| The name of the tag.
| users      | Array | Array of JSON objects, of users user_id, intercom identifier or email. Example: [{"id" : "53427b7ecce5722303000003"},{"user_id" : "22"},{"email" : "a@b.com"}].

## Intercom.untagUsers
Remove tag from User.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| The name of the tag.
| users      | Array | Array of JSON objects, of users user_id, intercom identifier or email. Example: [{"id" : "53427b7ecce5722303000003","untag": true},{"user_id" : "22"}].

## Intercom.tagCompany
Add tag to Company.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| The name of the tag.
| companies  | Array | Array of JSON objects, of companies company_id or intercom identifier. Example: [{"id" : "53427b7ecce5722303000003"},{"company_id" : "22"}].

## Intercom.untagCompany
Remove tag from Company.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| The name of the tag.
| companies  | Array | Array of JSON objects, of companies company_id or intercom identifier. Example: [{"id" : "53427b7ecce5722303000003", "untag": true},{"company_id" : "22"}].

## Intercom.deleteTag
Delete tag.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| tagId      | String| Tag identifier.

## Intercom.getAppTags
Fetch tags of App.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getSegments
Fetch list the user segments.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getSingleSegment
Fetch single segments.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| segmentId  | String| Segment identifier.

## Intercom.createNote
Create a Note.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| User identifier the note is to be created about.
| userIdType | String| The user identifier type. One of: intercom_id, user_id, email.
| body       | String| The text of the note.
| adminId    | String| The identifier of the admin creating the note.

## Intercom.getUserNotes
List Notes for a User.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The user identifier.
| userIdType | String| The user identifier type. One of: intercom_id, user_id, email.

## Intercom.getSingleNote
Fetch single Note.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| noteId     | String| The note identifier.

## Intercom.submitEvent
Submitting Events.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| eventName  | String| The name of the event that occurred.
| userId     | String| Your identifier for the the user.
| createdAt  | Number| The time the event occurred as a UTC Unix timestamp.
| metadata   | JSON  | JSON Object, metadata about the event.

## Intercom.getUserEvents
The events belonging to a user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The user identifier.

## Intercom.getUserEventsSummaries
View User Event Summaries.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The user identifier.

## Intercom.getAppTotalCounts
Fetch app total counts.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| type       | String| Type of counts. One of: company, segment, tag, user, lead.

## Intercom.getAppConversationCount
Fetch app conversation count.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getAdminConversationsCount
Fetch admin conversations count.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getUserSegmensCount
Fetch user segmens count.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getUserTagsCount
Fetch user tags count.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getCompanySegmentsCount
Fetch company segments count.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getCompanyTagsCount
Fetch company tags count.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getCompanyUsersCount
Fetch company users count.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.createAdminMessage
Create an admin initiated message to a user.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| fromAdminId   | String| Admin identifier from whom send message.
| receiverType  | String| Receiver type. One of: user, contact.
| receiverId    | String| The receiver identifier.
| receiverIdType| String| The receiver identifier type. One of: intercom_id, user_id, email.
| messageType   | String| The kind of message being created. One of: inapp, email.
| subject       | String| The title of the email.
| body          | String| The content of the message. Plaintext only, HTML is not supported.
| template      | String| The style of the outgoing message. Only valid for email messages. One of: plain, personal.

## Intercom.createUserMessage
Create user message.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| senderId    | String| The sender identifier.
| senderIdType| String| The sender identifier type. One of: intercom_id, user_id, email.
| body        | String| The content of the message. Plaintext only, HTML is not supported.

## Intercom.createContactMessage
Create contact message.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| senderId    | String| The sender identifier.
| senderIdType| String| The sender identifier type. One of: intercom_id, user_id, email.
| body        | String| The content of the message. Plaintext only, HTML is not supported.

## Intercom.getConversations
Fetch a list of all conversations.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getSingleAdminConversations
Fetch conversations for single admin.

| Field      | Type   | Description
|------------|--------|----------
| accessToken| String | Access token.
| adminId    | String | Admin identifier.
| open       | Boolean| when true fetches just open conversations, when false just closed conversations.

## Intercom.getSingleUserConversations
Fetch conversations with single user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The user identifier.
| userIdType | String| The user identifier type. One of: intercom_user_id, user_id, email.

## Intercom.getSingleConversation
Fetch single conversation.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| conversationId| String| Conversation identifier.

## Intercom.replyToUserComment
Replying to a Conversation.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| conversationId| String| Conversation identifier.
| body          | String| The text body of the comment.
| userId        | String| The user identifier.
| userIdType    | String| The user identifier type. One of: intercom_user_id, user_id, email.
| attachmentUrls| Array | Array of Strings of URLs of files that will be added as attachments. You can include up to 5 attachments.

## Intercom.replyToAdminComment
Reply to admin comment.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| conversationId| String| Conversation identifier.
| adminId       | String| The identifier of the Admin who is authoring the comment.
| body          | String| The text body of the comment.
| attachmentUrls| Array | Array of Strings of URLs of files that will be added as attachments. You can include up to 5 attachments.

## Intercom.replyToUsersLastConversation
Reply to users last conversation.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| intercomUserId| String| The user identifier.
| adminId       | String| The identifier of the Admin who is replying.
| body          | String| The text body of the comment.
| attachmentUrls| Array | Array of Strings of URLs of files that will be added as attachments. You can include up to 5 attachments.

## Intercom.markConversationAsRead
Marking a Conversation as Read.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| conversationId| String| Conversation identifier.

## Intercom.closeConversation
Closing a conversation.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| conversationId| String| Conversation identifier.
| adminId       | String| Admin identifier.

## Intercom.getSingleVisitor
Fetch single visitor.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| Visitor user identifier.
| userIdType | String| Visitor user identifier type. One of: intercom_id, user_id.

## Intercom.updateVisitor
Update a Visitor.

| Field                 | Type   | Description
|-----------------------|--------|----------
| accessToken           | String | Access token.
| userId                | String | User identifier for the Visitor.
| name                  | String | The name of the Visitor.
| customAttributes      | JSON   | JSON Object, the custom attributes you have set on the Visitor.
| lastRequestAt         | Number | The date the lead last visited your application, UNIX timestamp.
| avatarImageUrl        | String | An avatar image URL for the Visitor.
| unsubscribedFromEmails| Boolean| Whether the Visitor is unsubscribed from emails.
| locationData          | JSON   | JSON Object. Location relating to the Visitor. Example: {"type": "location_data","city_name": "Dublin","continent_code": "EU","country_code": "IRL","country_name": "Ireland","latitude": 53.159233,"longitude": -6.723,"postal_code": null,"region_name": "Dublin","timezone": "Europe/Dublin"}.
| userAgentData         | String | Data about the last user agent the Visitor was seen using.
| lastSeenIp            | String | An ip address.
| socialProfiles        | Array  | Array of JSON objects, of social profiles associated with the Visitor. Example: [{"name": "Twitter","id": "1235d3213","username": "th1sland","url": "http://twitter.com/th1sland"}].
| segments              | String | Comma-separated list of segments the Visitor.
| tags                  | String | Comma-separated list of tags associated with the Visitor.

## Intercom.deleteVisitor
Delete a visitor.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| User identifier for the Visitor.

## Intercom.convertVisitorToLead
Convert Visitor to Leads.

| Field            | Type  | Description
|------------------|-------|----------
| accessToken      | String| Access token.
| visitorUserId    | String| User identifier for the Visitor.
| visitorUserIdType| String| The Visitor user identifier of type. One of: intercom_id, user_id, email.
| leadId           | String| User identifier for the Lead to binding.

## Intercom.createSubscription
Create new subscription.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| url        | String| The url the event should be sent to.
| topics     | String| Comma-separated list of topics to subscribe to.
| serviceType| String| The type of the service being called. Default is web.
| hubSecret  | String| A key used to sign notifications.

## Intercom.getSingleSubscription
Fetch single subscription.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| subscriptionId| String| Subscription identifier.

## Intercom.getSubscriptions
Fetch list of subscriptions.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.

## Intercom.getErrorFeed
Fetch feed of errors returned by the webhook.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| subscriptionId| String| Subscription identifier.

## Intercom.getSentFeed
Fetch feed of notifications sent.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| subscriptionId| String| Subscription identifier.

## Intercom.pingSubscription
Ping subscription.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| subscriptionId| String| Subscription identifier.

## Intercom.createEventWebhookSubscription
Create an Event Webhook Subscription.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| Access token.
| metadataEventNames| String| Comma-separated list of events name to subscribe to.
| url               | String| The url the event should be sent to.
| serviceType       | String| The type of the service being called. Default is web.

## Intercom.updateEventWebhookSubscription
Update an Event Webhook Subscription.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| Access token.
| metadataEventNames| String| Comma-separated list of events name to subscribe to.
| url               | String| The url the event should be sent to.
| serviceType       | String| The type of the service being called. Default is web.

## Intercom.createUserBulkJobs
Creating bulk jobs for users.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| items      | Array | Array of object, of users tasks. Example: [{"method": "post","data_type": "user","data": {"user_id": "25","email": "wash@serenity.io"}},{"method": "post","data_type": "user","data": {"user_id": "25","email": "zoe@serenity.io"}}].

## Intercom.createBulkLeadJob
Bulk Lead Posting.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| items      | Array | Array of object, of Leads. Example: [{"method": "post","data_type": "contact","data": {"phone": "123987456","email": "winstonsmith@truth.org","name": "Winston Smith"}},{"method": "post","data_type": "contact","data": {"phone": "654789321","email": "obrien@truth.org","name": "OBrien"}}].

## Intercom.createBulkEventJob
Bulk Event Posting.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| items      | Array | Array of object, of Events. Example: [{"method": "post","data_type": "event","data": {"event_name": "invited-friend","created_at": 1438944979,"user_id": "314159","metadata": {"invitee_email": "pi@example.org","invite_code": "ADDAFRIEND"}}},{"method": "post","data_type": "event","data": {"event_name": "ordered-item","created_at": 1438944980,"user_id": "314159","metadata": {"order_date": 1438944980,"stripe_invoice": "inv_3434343434"}}}].

## Intercom.getSingleBulkJob
Fetch single job.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| jobId      | String| Bulk job identifier.

