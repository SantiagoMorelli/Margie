<?php
// This file was auto-generated from sdk-root/src/data/elasticfilesystem/2015-02-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-02-01', 'endpointPrefix' => 'elasticfilesystem', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'EFS', 'serviceFullName' => 'Amazon Elastic File System', 'serviceId' => 'EFS', 'signatureVersion' => 'v4', 'uid' => 'elasticfilesystem-2015-02-01', ], 'operations' => [ 'CreateAccessPoint' => [ 'name' => 'CreateAccessPoint', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-02-01/access-points', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateAccessPointRequest', ], 'output' => [ 'shape' => 'AccessPointDescription', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'AccessPointAlreadyExists', ], [ 'shape' => 'IncorrectFileSystemLifeCycleState', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'AccessPointLimitExceeded', ], ], ], 'CreateFileSystem' => [ 'name' => 'CreateFileSystem', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-02-01/file-systems', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateFileSystemRequest', ], 'output' => [ 'shape' => 'FileSystemDescription', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemAlreadyExists', ], [ 'shape' => 'FileSystemLimitExceeded', ], [ 'shape' => 'InsufficientThroughputCapacity', ], [ 'shape' => 'ThroughputLimitExceeded', ], ], ], 'CreateMountTarget' => [ 'name' => 'CreateMountTarget', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-02-01/mount-targets', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateMountTargetRequest', ], 'output' => [ 'shape' => 'MountTargetDescription', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'IncorrectFileSystemLifeCycleState', ], [ 'shape' => 'MountTargetConflict', ], [ 'shape' => 'SubnetNotFound', ], [ 'shape' => 'NoFreeAddressesInSubnet', ], [ 'shape' => 'IpAddressInUse', ], [ 'shape' => 'NetworkInterfaceLimitExceeded', ], [ 'shape' => 'SecurityGroupLimitExceeded', ], [ 'shape' => 'SecurityGroupNotFound', ], [ 'shape' => 'UnsupportedAvailabilityZone', ], ], ], 'CreateTags' => [ 'name' => 'CreateTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-02-01/create-tags/{FileSystemId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'CreateTagsRequest', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], ], 'deprecated' => true, 'deprecatedMessage' => 'Use TagResource.', ], 'DeleteAccessPoint' => [ 'name' => 'DeleteAccessPoint', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-02-01/access-points/{AccessPointId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteAccessPointRequest', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'AccessPointNotFound', ], ], ], 'DeleteFileSystem' => [ 'name' => 'DeleteFileSystem', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-02-01/file-systems/{FileSystemId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteFileSystemRequest', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'FileSystemInUse', ], ], ], 'DeleteFileSystemPolicy' => [ 'name' => 'DeleteFileSystemPolicy', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-02-01/file-systems/{FileSystemId}/policy', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteFileSystemPolicyRequest', ], 'errors' => [ [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'IncorrectFileSystemLifeCycleState', ], ], ], 'DeleteMountTarget' => [ 'name' => 'DeleteMountTarget', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-02-01/mount-targets/{MountTargetId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteMountTargetRequest', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'DependencyTimeout', ], [ 'shape' => 'MountTargetNotFound', ], ], ], 'DeleteTags' => [ 'name' => 'DeleteTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-02-01/delete-tags/{FileSystemId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteTagsRequest', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], ], 'deprecated' => true, 'deprecatedMessage' => 'Use UntagResource.', ], 'DescribeAccessPoints' => [ 'name' => 'DescribeAccessPoints', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-02-01/access-points', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeAccessPointsRequest', ], 'output' => [ 'shape' => 'DescribeAccessPointsResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'AccessPointNotFound', ], ], ], 'DescribeBackupPolicy' => [ 'name' => 'DescribeBackupPolicy', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-02-01/file-systems/{FileSystemId}/backup-policy', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeBackupPolicyRequest', ], 'output' => [ 'shape' => 'BackupPolicyDescription', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'PolicyNotFound', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeFileSystemPolicy' => [ 'name' => 'DescribeFileSystemPolicy', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-02-01/file-systems/{FileSystemId}/policy', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeFileSystemPolicyRequest', ], 'output' => [ 'shape' => 'FileSystemPolicyDescription', ], 'errors' => [ [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'PolicyNotFound', ], ], ], 'DescribeFileSystems' => [ 'name' => 'DescribeFileSystems', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-02-01/file-systems', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeFileSystemsRequest', ], 'output' => [ 'shape' => 'DescribeFileSystemsResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], ], ], 'DescribeLifecycleConfiguration' => [ 'name' => 'DescribeLifecycleConfiguration', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-02-01/file-systems/{FileSystemId}/lifecycle-configuration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeLifecycleConfigurationRequest', ], 'output' => [ 'shape' => 'LifecycleConfigurationDescription', ], 'errors' => [ [ 'shape' => 'InternalServerError', ], [ 'shape' => 'BadRequest', ], [ 'shape' => 'FileSystemNotFound', ], ], ], 'DescribeMountTargetSecurityGroups' => [ 'name' => 'DescribeMountTargetSecurityGroups', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-02-01/mount-targets/{MountTargetId}/security-groups', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeMountTargetSecurityGroupsRequest', ], 'output' => [ 'shape' => 'DescribeMountTargetSecurityGroupsResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'MountTargetNotFound', ], [ 'shape' => 'IncorrectMountTargetState', ], ], ], 'DescribeMountTargets' => [ 'name' => 'DescribeMountTargets', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-02-01/mount-targets', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeMountTargetsRequest', ], 'output' => [ 'shape' => 'DescribeMountTargetsResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'MountTargetNotFound', ], [ 'shape' => 'AccessPointNotFound', ], ], ], 'DescribeTags' => [ 'name' => 'DescribeTags', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-02-01/tags/{FileSystemId}/', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeTagsRequest', ], 'output' => [ 'shape' => 'DescribeTagsResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], ], 'deprecated' => true, 'deprecatedMessage' => 'Use ListTagsForResource.', ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-02-01/resource-tags/{ResourceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'AccessPointNotFound', ], ], ], 'ModifyMountTargetSecurityGroups' => [ 'name' => 'ModifyMountTargetSecurityGroups', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2015-02-01/mount-targets/{MountTargetId}/security-groups', 'responseCode' => 204, ], 'input' => [ 'shape' => 'ModifyMountTargetSecurityGroupsRequest', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'MountTargetNotFound', ], [ 'shape' => 'IncorrectMountTargetState', ], [ 'shape' => 'SecurityGroupLimitExceeded', ], [ 'shape' => 'SecurityGroupNotFound', ], ], ], 'PutBackupPolicy' => [ 'name' => 'PutBackupPolicy', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2015-02-01/file-systems/{FileSystemId}/backup-policy', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutBackupPolicyRequest', ], 'output' => [ 'shape' => 'BackupPolicyDescription', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'IncorrectFileSystemLifeCycleState', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'ValidationException', ], ], ], 'PutFileSystemPolicy' => [ 'name' => 'PutFileSystemPolicy', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2015-02-01/file-systems/{FileSystemId}/policy', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutFileSystemPolicyRequest', ], 'output' => [ 'shape' => 'FileSystemPolicyDescription', ], 'errors' => [ [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'InvalidPolicyException', ], [ 'shape' => 'IncorrectFileSystemLifeCycleState', ], ], ], 'PutLifecycleConfiguration' => [ 'name' => 'PutLifecycleConfiguration', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2015-02-01/file-systems/{FileSystemId}/lifecycle-configuration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutLifecycleConfigurationRequest', ], 'output' => [ 'shape' => 'LifecycleConfigurationDescription', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'IncorrectFileSystemLifeCycleState', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-02-01/resource-tags/{ResourceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'AccessPointNotFound', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-02-01/resource-tags/{ResourceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'AccessPointNotFound', ], ], ], 'UpdateFileSystem' => [ 'name' => 'UpdateFileSystem', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2015-02-01/file-systems/{FileSystemId}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'UpdateFileSystemRequest', ], 'output' => [ 'shape' => 'FileSystemDescription', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'IncorrectFileSystemLifeCycleState', ], [ 'shape' => 'InsufficientThroughputCapacity', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'ThroughputLimitExceeded', ], [ 'shape' => 'TooManyRequests', ], ], ], ], 'shapes' => [ 'AccessPointAlreadyExists' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', 'AccessPointId', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], 'AccessPointId' => [ 'shape' => 'AccessPointId', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'AccessPointArn' => [ 'type' => 'string', ], 'AccessPointDescription' => [ 'type' => 'structure', 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', ], 'Name' => [ 'shape' => 'Name', ], 'Tags' => [ 'shape' => 'Tags', ], 'AccessPointId' => [ 'shape' => 'AccessPointId', ], 'AccessPointArn' => [ 'shape' => 'AccessPointArn', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'PosixUser' => [ 'shape' => 'PosixUser', ], 'RootDirectory' => [ 'shape' => 'RootDirectory', ], 'OwnerId' => [ 'shape' => 'AwsAccountId', ], 'LifeCycleState' => [ 'shape' => 'LifeCycleState', ], ], ], 'AccessPointDescriptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccessPointDescription', ], ], 'AccessPointId' => [ 'type' => 'string', ], 'AccessPointLimitExceeded' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'AccessPointNotFound' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'AvailabilityZoneId' => [ 'type' => 'string', ], 'AvailabilityZoneName' => [ 'type' => 'string', ], 'AwsAccountId' => [ 'type' => 'string', 'max' => 14, 'pattern' => '^(\\d{12})|(\\d{4}-\\d{4}-\\d{4})$', ], 'BackupPolicy' => [ 'type' => 'structure', 'required' => [ 'Status', ], 'members' => [ 'Status' => [ 'shape' => 'Status', ], ], ], 'BackupPolicyDescription' => [ 'type' => 'structure', 'members' => [ 'BackupPolicy' => [ 'shape' => 'BackupPolicy', ], ], ], 'BadRequest' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'BypassPolicyLockoutSafetyCheck' => [ 'type' => 'boolean', ], 'ClientToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'CreateAccessPointRequest' => [ 'type' => 'structure', 'required' => [ 'ClientToken', 'FileSystemId', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'Tags', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'PosixUser' => [ 'shape' => 'PosixUser', ], 'RootDirectory' => [ 'shape' => 'RootDirectory', ], ], ], 'CreateFileSystemRequest' => [ 'type' => 'structure', 'required' => [ 'CreationToken', ], 'members' => [ 'CreationToken' => [ 'shape' => 'CreationToken', 'idempotencyToken' => true, ], 'PerformanceMode' => [ 'shape' => 'PerformanceMode', ], 'Encrypted' => [ 'shape' => 'Encrypted', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyId', ], 'ThroughputMode' => [ 'shape' => 'ThroughputMode', ], 'ProvisionedThroughputInMibps' => [ 'shape' => 'ProvisionedThroughputInMibps', ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'CreateMountTargetRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', 'SubnetId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'SubnetId' => [ 'shape' => 'SubnetId', ], 'IpAddress' => [ 'shape' => 'IpAddress', ], 'SecurityGroups' => [ 'shape' => 'SecurityGroups', ], ], ], 'CreateTagsRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', 'Tags', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'CreationInfo' => [ 'type' => 'structure', 'required' => [ 'OwnerUid', 'OwnerGid', 'Permissions', ], 'members' => [ 'OwnerUid' => [ 'shape' => 'OwnerUid', ], 'OwnerGid' => [ 'shape' => 'OwnerGid', ], 'Permissions' => [ 'shape' => 'Permissions', ], ], ], 'CreationToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '.+', ], 'DeleteAccessPointRequest' => [ 'type' => 'structure', 'required' => [ 'AccessPointId', ], 'members' => [ 'AccessPointId' => [ 'shape' => 'AccessPointId', 'location' => 'uri', 'locationName' => 'AccessPointId', ], ], ], 'DeleteFileSystemPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], ], ], 'DeleteFileSystemRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], ], ], 'DeleteMountTargetRequest' => [ 'type' => 'structure', 'required' => [ 'MountTargetId', ], 'members' => [ 'MountTargetId' => [ 'shape' => 'MountTargetId', 'location' => 'uri', 'locationName' => 'MountTargetId', ], ], ], 'DeleteTagsRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', 'TagKeys', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], 'TagKeys' => [ 'shape' => 'TagKeys', ], ], ], 'DependencyTimeout' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 504, ], 'exception' => true, ], 'DescribeAccessPointsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'Token', 'location' => 'querystring', 'locationName' => 'NextToken', ], 'AccessPointId' => [ 'shape' => 'AccessPointId', 'location' => 'querystring', 'locationName' => 'AccessPointId', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'querystring', 'locationName' => 'FileSystemId', ], ], ], 'DescribeAccessPointsResponse' => [ 'type' => 'structure', 'members' => [ 'AccessPoints' => [ 'shape' => 'AccessPointDescriptions', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'DescribeBackupPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], ], ], 'DescribeFileSystemPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], ], ], 'DescribeFileSystemsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxItems' => [ 'shape' => 'MaxItems', 'location' => 'querystring', 'locationName' => 'MaxItems', ], 'Marker' => [ 'shape' => 'Marker', 'location' => 'querystring', 'locationName' => 'Marker', ], 'CreationToken' => [ 'shape' => 'CreationToken', 'location' => 'querystring', 'locationName' => 'CreationToken', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'querystring', 'locationName' => 'FileSystemId', ], ], ], 'DescribeFileSystemsResponse' => [ 'type' => 'structure', 'members' => [ 'Marker' => [ 'shape' => 'Marker', ], 'FileSystems' => [ 'shape' => 'FileSystemDescriptions', ], 'NextMarker' => [ 'shape' => 'Marker', ], ], ], 'DescribeLifecycleConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], ], ], 'DescribeMountTargetSecurityGroupsRequest' => [ 'type' => 'structure', 'required' => [ 'MountTargetId', ], 'members' => [ 'MountTargetId' => [ 'shape' => 'MountTargetId', 'location' => 'uri', 'locationName' => 'MountTargetId', ], ], ], 'DescribeMountTargetSecurityGroupsResponse' => [ 'type' => 'structure', 'required' => [ 'SecurityGroups', ], 'members' => [ 'SecurityGroups' => [ 'shape' => 'SecurityGroups', ], ], ], 'DescribeMountTargetsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxItems' => [ 'shape' => 'MaxItems', 'location' => 'querystring', 'locationName' => 'MaxItems', ], 'Marker' => [ 'shape' => 'Marker', 'location' => 'querystring', 'locationName' => 'Marker', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'querystring', 'locationName' => 'FileSystemId', ], 'MountTargetId' => [ 'shape' => 'MountTargetId', 'location' => 'querystring', 'locationName' => 'MountTargetId', ], 'AccessPointId' => [ 'shape' => 'AccessPointId', 'location' => 'querystring', 'locationName' => 'AccessPointId', ], ], ], 'DescribeMountTargetsResponse' => [ 'type' => 'structure', 'members' => [ 'Marker' => [ 'shape' => 'Marker', ], 'MountTargets' => [ 'shape' => 'MountTargetDescriptions', ], 'NextMarker' => [ 'shape' => 'Marker', ], ], ], 'DescribeTagsRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'MaxItems' => [ 'shape' => 'MaxItems', 'location' => 'querystring', 'locationName' => 'MaxItems', ], 'Marker' => [ 'shape' => 'Marker', 'location' => 'querystring', 'locationName' => 'Marker', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], ], ], 'DescribeTagsResponse' => [ 'type' => 'structure', 'required' => [ 'Tags', ], 'members' => [ 'Marker' => [ 'shape' => 'Marker', ], 'Tags' => [ 'shape' => 'Tags', ], 'NextMarker' => [ 'shape' => 'Marker', ], ], ], 'Encrypted' => [ 'type' => 'boolean', ], 'ErrorCode' => [ 'type' => 'string', 'min' => 1, ], 'ErrorMessage' => [ 'type' => 'string', ], 'FileSystemAlreadyExists' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', 'FileSystemId', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'FileSystemArn' => [ 'type' => 'string', ], 'FileSystemDescription' => [ 'type' => 'structure', 'required' => [ 'OwnerId', 'CreationToken', 'FileSystemId', 'CreationTime', 'LifeCycleState', 'NumberOfMountTargets', 'SizeInBytes', 'PerformanceMode', 'Tags', ], 'members' => [ 'OwnerId' => [ 'shape' => 'AwsAccountId', ], 'CreationToken' => [ 'shape' => 'CreationToken', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'FileSystemArn' => [ 'shape' => 'FileSystemArn', ], 'CreationTime' => [ 'shape' => 'Timestamp', ], 'LifeCycleState' => [ 'shape' => 'LifeCycleState', ], 'Name' => [ 'shape' => 'TagValue', ], 'NumberOfMountTargets' => [ 'shape' => 'MountTargetCount', ], 'SizeInBytes' => [ 'shape' => 'FileSystemSize', ], 'PerformanceMode' => [ 'shape' => 'PerformanceMode', ], 'Encrypted' => [ 'shape' => 'Encrypted', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyId', ], 'ThroughputMode' => [ 'shape' => 'ThroughputMode', ], 'ProvisionedThroughputInMibps' => [ 'shape' => 'ProvisionedThroughputInMibps', ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'FileSystemDescriptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSystemDescription', ], ], 'FileSystemId' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^(arn:aws[-a-z]*:elasticfilesystem:[0-9a-z-:]+:file-system/fs-[0-9a-f]{8,40}|fs-[0-9a-f]{8,40})$', ], 'FileSystemInUse' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'FileSystemLimitExceeded' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'FileSystemNotFound' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'FileSystemNullableSizeValue' => [ 'type' => 'long', 'min' => 0, ], 'FileSystemPolicyDescription' => [ 'type' => 'structure', 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'Policy' => [ 'shape' => 'Policy', ], ], ], 'FileSystemSize' => [ 'type' => 'structure', 'required' => [ 'Value', ], 'members' => [ 'Value' => [ 'shape' => 'FileSystemSizeValue', ], 'Timestamp' => [ 'shape' => 'Timestamp', ], 'ValueInIA' => [ 'shape' => 'FileSystemNullableSizeValue', ], 'ValueInStandard' => [ 'shape' => 'FileSystemNullableSizeValue', ], ], ], 'FileSystemSizeValue' => [ 'type' => 'long', 'min' => 0, ], 'Gid' => [ 'type' => 'long', 'max' => 4294967295, 'min' => 0, ], 'IncorrectFileSystemLifeCycleState' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'IncorrectMountTargetState' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'InsufficientThroughputCapacity' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 503, ], 'exception' => true, ], 'InternalServerError' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'InvalidPolicyException' => [ 'type' => 'structure', 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'IpAddress' => [ 'type' => 'string', 'max' => 15, 'min' => 7, 'pattern' => '^[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}$', ], 'IpAddressInUse' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'KmsKeyId' => [ 'type' => 'string', 'max' => 2048, 'pattern' => '^([0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}|alias/[a-zA-Z0-9/_-]+|(arn:aws[-a-z]*:kms:[a-z0-9-]+:\\d{12}:((key/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})|(alias/[a-zA-Z0-9/_-]+))))$', ], 'LifeCycleState' => [ 'type' => 'string', 'enum' => [ 'creating', 'available', 'updating', 'deleting', 'deleted', ], ], 'LifecycleConfigurationDescription' => [ 'type' => 'structure', 'members' => [ 'LifecyclePolicies' => [ 'shape' => 'LifecyclePolicies', ], ], ], 'LifecyclePolicies' => [ 'type' => 'list', 'member' => [ 'shape' => 'LifecyclePolicy', ], ], 'LifecyclePolicy' => [ 'type' => 'structure', 'members' => [ 'TransitionToIA' => [ 'shape' => 'TransitionToIARules', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', ], 'members' => [ 'ResourceId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'ResourceId', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'Token', 'location' => 'querystring', 'locationName' => 'NextToken', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'Tags', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'Marker' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '.+', ], 'MaxItems' => [ 'type' => 'integer', 'min' => 1, ], 'MaxResults' => [ 'type' => 'integer', 'min' => 1, ], 'ModifyMountTargetSecurityGroupsRequest' => [ 'type' => 'structure', 'required' => [ 'MountTargetId', ], 'members' => [ 'MountTargetId' => [ 'shape' => 'MountTargetId', 'location' => 'uri', 'locationName' => 'MountTargetId', ], 'SecurityGroups' => [ 'shape' => 'SecurityGroups', ], ], ], 'MountTargetConflict' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'MountTargetCount' => [ 'type' => 'integer', 'min' => 0, ], 'MountTargetDescription' => [ 'type' => 'structure', 'required' => [ 'MountTargetId', 'FileSystemId', 'SubnetId', 'LifeCycleState', ], 'members' => [ 'OwnerId' => [ 'shape' => 'AwsAccountId', ], 'MountTargetId' => [ 'shape' => 'MountTargetId', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'SubnetId' => [ 'shape' => 'SubnetId', ], 'LifeCycleState' => [ 'shape' => 'LifeCycleState', ], 'IpAddress' => [ 'shape' => 'IpAddress', ], 'NetworkInterfaceId' => [ 'shape' => 'NetworkInterfaceId', ], 'AvailabilityZoneId' => [ 'shape' => 'AvailabilityZoneId', ], 'AvailabilityZoneName' => [ 'shape' => 'AvailabilityZoneName', ], 'VpcId' => [ 'shape' => 'VpcId', ], ], ], 'MountTargetDescriptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'MountTargetDescription', ], ], 'MountTargetId' => [ 'type' => 'string', 'max' => 45, 'min' => 13, 'pattern' => '^fsmt-[0-9a-f]{8,40}$', ], 'MountTargetNotFound' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'Name' => [ 'type' => 'string', ], 'NetworkInterfaceId' => [ 'type' => 'string', ], 'NetworkInterfaceLimitExceeded' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'NoFreeAddressesInSubnet' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'OwnerGid' => [ 'type' => 'long', 'max' => 4294967295, 'min' => 0, ], 'OwnerUid' => [ 'type' => 'long', 'max' => 4294967295, 'min' => 0, ], 'Path' => [ 'type' => 'string', 'max' => 100, 'min' => 1, ], 'PerformanceMode' => [ 'type' => 'string', 'enum' => [ 'generalPurpose', 'maxIO', ], ], 'Permissions' => [ 'type' => 'string', 'pattern' => '^[0-7]{3,4}$', ], 'Policy' => [ 'type' => 'string', ], 'PolicyNotFound' => [ 'type' => 'structure', 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'PosixUser' => [ 'type' => 'structure', 'required' => [ 'Uid', 'Gid', ], 'members' => [ 'Uid' => [ 'shape' => 'Uid', ], 'Gid' => [ 'shape' => 'Gid', ], 'SecondaryGids' => [ 'shape' => 'SecondaryGids', ], ], ], 'ProvisionedThroughputInMibps' => [ 'type' => 'double', 'min' => 1, ], 'PutBackupPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', 'BackupPolicy', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], 'BackupPolicy' => [ 'shape' => 'BackupPolicy', ], ], ], 'PutFileSystemPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', 'Policy', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], 'Policy' => [ 'shape' => 'Policy', ], 'BypassPolicyLockoutSafetyCheck' => [ 'shape' => 'BypassPolicyLockoutSafetyCheck', ], ], ], 'PutLifecycleConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', 'LifecyclePolicies', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], 'LifecyclePolicies' => [ 'shape' => 'LifecyclePolicies', ], ], ], 'ResourceId' => [ 'type' => 'string', ], 'RootDirectory' => [ 'type' => 'structure', 'members' => [ 'Path' => [ 'shape' => 'Path', ], 'CreationInfo' => [ 'shape' => 'CreationInfo', ], ], ], 'SecondaryGids' => [ 'type' => 'list', 'member' => [ 'shape' => 'Gid', ], 'max' => 16, 'min' => 0, ], 'SecurityGroup' => [ 'type' => 'string', 'max' => 43, 'min' => 11, 'pattern' => '^sg-[0-9a-f]{8,40}', ], 'SecurityGroupLimitExceeded' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'SecurityGroupNotFound' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'SecurityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroup', ], 'max' => 5, ], 'Status' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'ENABLING', 'DISABLED', 'DISABLING', ], ], 'SubnetId' => [ 'type' => 'string', 'max' => 47, 'min' => 15, 'pattern' => '^subnet-[0-9a-f]{8,40}$', ], 'SubnetNotFound' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?![aA]{1}[wW]{1}[sS]{1}:)([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]+)$', ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 1, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', 'Tags', ], 'members' => [ 'ResourceId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'ResourceId', ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'Tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'ThroughputLimitExceeded' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ThroughputMode' => [ 'type' => 'string', 'enum' => [ 'bursting', 'provisioned', ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'Token' => [ 'type' => 'string', ], 'TooManyRequests' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'TransitionToIARules' => [ 'type' => 'string', 'enum' => [ 'AFTER_7_DAYS', 'AFTER_14_DAYS', 'AFTER_30_DAYS', 'AFTER_60_DAYS', 'AFTER_90_DAYS', ], ], 'Uid' => [ 'type' => 'long', 'max' => 4294967295, 'min' => 0, ], 'UnsupportedAvailabilityZone' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceId', 'TagKeys', ], 'members' => [ 'ResourceId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'ResourceId', ], 'TagKeys' => [ 'shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UpdateFileSystemRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', 'location' => 'uri', 'locationName' => 'FileSystemId', ], 'ThroughputMode' => [ 'shape' => 'ThroughputMode', ], 'ProvisionedThroughputInMibps' => [ 'shape' => 'ProvisionedThroughputInMibps', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'ErrorCode', ], 'members' => [ 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'VpcId' => [ 'type' => 'string', ], ],];
