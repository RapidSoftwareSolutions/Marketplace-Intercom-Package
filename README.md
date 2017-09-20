[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Intercom/functions?utm_source=RapidAPIGitHub_IntercomFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Intercom Package
Connect to the Intercom Customer Service API to access data and build integrations for this chat app. Test an API call and export the code snippet into your app.
* Domain: [Intercom](http://intercom.com)
* Credentials: clientId, clientSecret

## How to get credentials: 
0. [Sign up](https://app.intercom.io/a/start) in Intercom. 
1. Navigate to Settings -> App settings(on the top left) -> Developer tools.
2. Create "Access token" or "OAuth App".
3. If you choose "OAuth App", copy clientId and clientSecret and use them to generate Access token.

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
 ## Webhook credentials
 Please use SDK to test this feature.
 0. Go to [RapidAPI](http://rapidapi.com)
 1. Log in or create an account
 2. Go to [My apps](https://dashboard.rapidapi.com/projects)
 3. Add new project with projectName to get your project Key
 
 | Field      | Type       | Description
 |------------|------------|----------
 | projectName     | credentials| Your RapidAPI project name
 | projectKey | credentials     | Your RapidAPI project key

## Intercom.getAccessToken
Fetch access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client identifier from your credentials.
| clientSecret| credentials| Client secret from your credentials.
| code        | String     | This is automatically passed by the redirect.

## Intercom.createUserByEmail
Create user by email.

| Field              | Type      | Description
|--------------------|-----------|----------
| accessToken        | String    | Access token.
| email              | String    | The user's email address.
| userId             | String    | A unique string identifier for the user.
| phone              | String    | The user's phone number.
| name               | String    | The user's full name.
| lastSeenIp         | String    | An ip address.
| customAttributes   | JSON      | JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String    | The user agent the user last visited your application with.
| companies          | List      | Array of JSON objects of companies.
| lastRequestAt      | DatePicker| The date the user last visited your application
| updateLastRequestAt| Boolean   | If true, instructs Intercom to update the user's last_request_at value.
| newSession         | Boolean   | If true, instructs Intercom to register the request as a session.

## Intercom.createUserById
Create user by identifier.

| Field              | Type      | Description
|--------------------|-----------|----------
| accessToken        | String    | Access token.
| userId             | String    | A unique string identifier for the user.
| email              | String    | The user's email address.
| phone              | String    | The user's phone number.
| name               | String    | The user's full name.
| lastSeenIp         | String    | An ip address.
| customAttributes   | JSON      | JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String    | The user agent the user last visited your application with.
| companies          | List      | Array of JSON objects of companies.
| lastRequestAt      | DatePicker| The date the user last visited your application
| updateLastRequestAt| Boolean   | If true, instructs Intercom to update the user's last_request_at value.
| newSession         | Boolean   | If true, instructs Intercom to register the request as a session.

## Intercom.updateUserByEmail
Update user by email.

| Field              | Type      | Description
|--------------------|-----------|----------
| accessToken        | String    | Access token.
| email              | String    | The user's email address.
| userId             | String    | A unique string identifier for the user.
| phone              | String    | The user's phone number.
| name               | String    | The user's full name.
| lastSeenIp         | String    | An ip address.
| customAttributes   | JSON      | JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String    | The user agent the user last visited your application with.
| companies          | List      | Array of JSON objects of companies.
| lastRequestAt      | DatePicker| The date the user last visited your application
| updateLastRequestAt| Boolean   | If true, instructs Intercom to update the user's last_request_at value.
| newSession         | Boolean   | If true, instructs Intercom to register the request as a session.

## Intercom.updateUserById
Update user by identifier.

| Field              | Type      | Description
|--------------------|-----------|----------
| accessToken        | String    | Access token.
| userId             | String    | A unique string identifier for the user.
| email              | String    | The user's email address.
| phone              | String    | The user's phone number.
| name               | String    | The user's full name.
| lastSeenIp         | String    | An ip address.
| customAttributes   | JSON      | JSON Object, a hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String    | The user agent the user last visited your application with.
| companies          | List      | Array of JSON objects of companies.
| lastRequestAt      | DateTicker| The date the user last visited your application
| updateLastRequestAt| Boolean   | If true, instructs Intercom to update the user's last_request_at value.
| newSession         | Boolean   | If true, instructs Intercom to register the request as a session.

## Intercom.getUsers
Fetch a list of users.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| page        | String| what page of results to fetch.
| perPage     | String| how many results per page.
| order       | String| Return the users in ascending or descending order. One of: asc, desc.
| sort        | Select| what field to sort the results by. One of: created_at, last_request_at, signed_up_at, updated_at.
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
| userIdType | Select| The user identifier type. One of: intercom_id, user_id, email.

## Intercom.deleteUser
Delete user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The user identifier.
| userIdType | Select| The user identifier type. One of: intercom_id, user_id, email.

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
| companies       | List  | Array of JSON objects of companies.
| socialProfiles  | List  | Array of JSON objects, of social profiles associated with the Lead.
| segments        | List  | Array of segments the Lead.
| tags            | String| Array of tags associated with the Lead.
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
| companies       | List  | Array of JSON objects of companies.
| socialProfiles  | List  | Array of JSON objects, of social profiles associated with the Lead.
| segments        | List  | Array of segments the Lead.
| tags            | List  | Array of tags associated with the Lead.
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
| userIdType | Select| The lead identifier type. One of: intercom_id, user_id, email.

## Intercom.deleteLead
Delete lead.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The lead identifier.
| userIdType | Select| The lead identifier type. One of: intercom_id, user_id, email.

## Intercom.convertLeadToUser
Convert Lead to Users.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| leadId     | String| The lead identifier.
| leadIdType | Select| The user identifier type. One of: intercom_id, user_id, email.
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
| companyId       | String| The company id you have defined for the company.
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
| users      | List  | Array of JSON objects, of users user_id, intercom identifier or email.

## Intercom.untagUsers
Remove tag from User.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| The name of the tag.
| users      | List  | Array of JSON objects, of users user_id, intercom identifier or email.

## Intercom.tagCompany
Add tag to Company.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| The name of the tag.
| companies  | List  | Array of JSON objects, of companies company_id or intercom identifier.

## Intercom.untagCompany
Remove tag from Company.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| name       | String| The name of the tag.
| companies  | List  | Array of JSON objects, of companies company_id or intercom identifier.

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
| userIdType | Select| The user identifier type. One of: intercom_id, user_id, email.
| body       | String| The text of the note.
| adminId    | String| The identifier of the admin creating the note.

## Intercom.getUserNotes
List Notes for a User.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| userId     | String| The user identifier.
| userIdType | Select| The user identifier type. One of: intercom_id, user_id, email.

## Intercom.getSingleNote
Fetch single Note.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| noteId     | String| The note identifier.

## Intercom.submitEvent
Submitting Events.

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | Access token.
| eventName  | String    | The name of the event that occurred.
| userId     | String    | Your identifier for the the user.
| createdAt  | DatePicker| The time the event occurred
| metadata   | JSON      | JSON Object, metadata about the event.

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
| type       | Select| Type of counts. One of: user, company, conversation.

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
| receiverType  | Select| Receiver type. One of: user, contact.
| receiverId    | String| The receiver identifier.
| receiverIdType| Select| The receiver identifier type. One of: intercom_id, user_id, email.
| messageType   | Select| The kind of message being created. One of: inapp, email.
| subject       | String| The title of the email.
| body          | String| The content of the message. Plaintext only, HTML is not supported.
| template      | Select| The style of the outgoing message. Only valid for email messages. One of: plain, personal.

## Intercom.createUserMessage
Create user message.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| senderId    | String| The sender identifier.
| senderIdType| Select| The sender identifier type. One of: intercom_id, user_id, email.
| body        | String| The content of the message. Plaintext only, HTML is not supported.

## Intercom.createContactMessage
Create contact message.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token.
| senderId    | String| The sender identifier.
| senderIdType| Select| The sender identifier type. One of: intercom_id, user_id.
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
| userIdType | Select| The user identifier type. One of: intercom_user_id, user_id, email.

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
| userIdType    | Select| The user identifier type. One of: intercom_user_id, user_id, email.
| attachmentUrls| List  | Array of Strings of URLs of files that will be added as attachments. You can include up to 5 attachments.

## Intercom.replyToAdminComment
Reply to admin comment.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| conversationId| String| Conversation identifier.
| adminId       | String| The identifier of the Admin who is authoring the comment.
| body          | String| The text body of the comment.
| attachmentUrls| List  | Array of Strings of URLs of files that will be added as attachments. You can include up to 5 attachments.

## Intercom.replyToUsersLastConversation
Reply to users last conversation.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token.
| intercomUserId| String| The user identifier.
| adminId       | String| The identifier of the Admin who is replying.
| body          | String| The text body of the comment.
| attachmentUrls| List  | Array of Strings of URLs of files that will be added as attachments. You can include up to 5 attachments.

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
| userIdType | Select| Visitor user identifier type. One of: intercom_id, user_id.

## Intercom.updateVisitor
Update a Visitor.

| Field                 | Type      | Description
|-----------------------|-----------|----------
| accessToken           | String    | Access token.
| userId                | String    | User identifier for the Visitor.
| name                  | String    | The name of the Visitor.
| customAttributes      | JSON      | JSON Object, the custom attributes you have set on the Visitor.
| lastRequestAt         | DatePicker| The date the lead last visited your application
| avatarImageUrl        | String    | An avatar image URL for the Visitor.
| unsubscribedFromEmails| Boolean   | Whether the Visitor is unsubscribed from emails.
| locationData          | JSON      | JSON Object. Location relating to the Visitor.
| userAgentData         | String    | Data about the last user agent the Visitor was seen using.
| lastSeenIp            | String    | An ip address.
| socialProfiles        | List      | Array of JSON objects, of social profiles associated with the Visitor.
| segments              | List      | Array of segments the Visitor.
| tags                  | List      | Array of tags associated with the Visitor.

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
| visitorUserIdType| Select| The Visitor user identifier of type. One of: intercom_id, user_id, email.
| leadId           | String| User identifier for the Lead to binding.

## Intercom.createSubscription
Create new subscription.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| url        | String| The url the event should be sent to.
| topics     | List  | Comma-separated list of topics to subscribe to.
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
You can use our service as url: 
```
https://webhooks.rapidapi.com/api/message/Intercom/webhookEvent/{projectName}/{projectKey} * see credentials description above
```

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| Access token.
| metadataEventNames| List  | Array of events name to subscribe to.
| url               | String| The url the event should be sent to.
| serviceType       | String| The type of the service being called. Default is web.

## Intercom.updateEventWebhookSubscription
Update an Event Webhook Subscription.
You can use our service as url: 
```
https://webhooks.rapidapi.com/api/message/Mandrill/webhookEvent/{projectName}/{projectKey} * see credentials description above
```

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| Access token.
| metadataEventNames| List  | Array of events name to subscribe to.
| url               | String| The url the event should be sent to.
| serviceType       | String| The type of the service being called. Default is web.

## Intercom.createUserBulkJobs
Creating bulk jobs for users.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| items      | List  | Array of object, of users tasks.

## Intercom.createBulkLeadJob
Bulk Lead Posting.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| items      | List  | Array of object, of Leads.

## Intercom.createBulkEventJob
Bulk Event Posting.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| items      | List  | Array of object, of Events.

## Intercom.getSingleBulkJob
Fetch single job.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| jobId      | String| Bulk job identifier.

