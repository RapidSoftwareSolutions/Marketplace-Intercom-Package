[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Intercom/functions?utm_source=RapidAPIGitHub_IntercomFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Intercom Package
Connect to the Intercom Customer Service API to access data and build integrations for this chat app. Test an API call and export the code snippet into your app.
* Domain: intercom.com
* Credentials: clientId, clientSecret

## How to get credentials: 
0. Item one 
1. Item two 

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
| customAttributes   | JSON   | A hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String | The user agent the user last visited your application with.
| companies          | String | Identifies the companies this user belongs to.
| lastRequestAt      | String | The date the user last visited your application, UNIX timestamp.
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
| customAttributes   | JSON   | A hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String | The user agent the user last visited your application with.
| companies          | String | Identifies the companies this user belongs to.
| lastRequestAt      | String | The date the user last visited your application, UNIX timestamp.
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
| customAttributes   | JSON   | A hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String | The user agent the user last visited your application with.
| companies          | String | Identifies the companies this user belongs to.
| lastRequestAt      | String | The date the user last visited your application, UNIX timestamp.
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
| customAttributes   | JSON   | A hash of key - value pairs containing any other data about the user you want Intercom to store.
| lastSeenUserAgent  | String | The user agent the user last visited your application with.
| companies          | String | Identifies the companies this user belongs to.
| lastRequestAt      | String | The date the user last visited your application, UNIX timestamp.
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
| companies       | Array | Array of string, of companies for the Lead.
| socialProfiles  | Array | Array of string, of social profiles associated with the Lead.
| segments        | Array | Array of string, of segments the Lead.
| tags            | Array | Array of string, of tags associated with the Lead.
| customAttributes| JSON  | The custom attributes you have set on the Lead.
| locationData    | JSON  | A Location Object relating to the Lead.

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
| companies       | Array | Array of string, of companies for the Lead.
| socialProfiles  | Array | Array of string, of social profiles associated with the Lead.
| segments        | Array | Array of string, of segments the Lead.
| tags            | Array | Array of string, of tags associated with the Lead.
| customAttributes| JSON  | The custom attributes you have set on the Lead.
| locationData    | JSON  | A Location Object relating to the Lead.

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
| userIdType | String| Identifier of existing user type. One of: intercom_id, user_id, email.

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
| monthlySpend    | Number| How much revenue the company generates for your business.
| plan            | String| The name of the plan you have associated with the company.
| customAttributes| JSON  | A hash of key - value pairs containing any other data about the company you want Intercom to store.

## Intercom.updateCompany
Update company.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| Access token.
| companyId       | String| The company identifier.
| name            | String| The name of the company.
| monthlySpend    | number| How much revenue the company generates for your business.
| plan            | String| The name of the plan you have associated with the company.
| customAttributes| object| A hash of key - value pairs containing any other data about the company you want Intercom to store.

## Intercom.getCompanies
Fetch a list of companies.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token.
| page       | numb  | What page of results to fetch.
| perPage    | numb  | How many results per page.
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
| companyId  |       | The company identifier, you have given to the company.

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
| users      | Array | Array of json object, of users user_id, intercom identifier or email. Example: [{"id" : "53427b7ecce5722303000003"},{"user_id" : "22"},{"email" : "a@b.com"}].

