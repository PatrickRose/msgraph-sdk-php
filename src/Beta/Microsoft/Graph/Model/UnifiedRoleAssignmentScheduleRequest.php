<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleAssignmentScheduleRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* UnifiedRoleAssignmentScheduleRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleAssignmentScheduleRequest extends Request
{
    /**
    * Gets the action
    *
    * @return string|null The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            return $this->_propDict["action"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the action
    *
    * @param string $val The action
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
        return $this;
    }
    
    /**
    * Gets the appScopeId
    *
    * @return string|null The appScopeId
    */
    public function getAppScopeId()
    {
        if (array_key_exists("appScopeId", $this->_propDict)) {
            return $this->_propDict["appScopeId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appScopeId
    *
    * @param string $val The appScopeId
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setAppScopeId($val)
    {
        $this->_propDict["appScopeId"] = $val;
        return $this;
    }
    
    /**
    * Gets the directoryScopeId
    *
    * @return string|null The directoryScopeId
    */
    public function getDirectoryScopeId()
    {
        if (array_key_exists("directoryScopeId", $this->_propDict)) {
            return $this->_propDict["directoryScopeId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the directoryScopeId
    *
    * @param string $val The directoryScopeId
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setDirectoryScopeId($val)
    {
        $this->_propDict["directoryScopeId"] = $val;
        return $this;
    }
    
    /**
    * Gets the isValidationOnly
    *
    * @return bool|null The isValidationOnly
    */
    public function getIsValidationOnly()
    {
        if (array_key_exists("isValidationOnly", $this->_propDict)) {
            return $this->_propDict["isValidationOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isValidationOnly
    *
    * @param bool $val The isValidationOnly
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setIsValidationOnly($val)
    {
        $this->_propDict["isValidationOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the justification
    *
    * @return string|null The justification
    */
    public function getJustification()
    {
        if (array_key_exists("justification", $this->_propDict)) {
            return $this->_propDict["justification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the justification
    *
    * @param string $val The justification
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalId
    *
    * @return string|null The principalId
    */
    public function getPrincipalId()
    {
        if (array_key_exists("principalId", $this->_propDict)) {
            return $this->_propDict["principalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalId
    *
    * @param string $val The principalId
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinitionId
    *
    * @return string|null The roleDefinitionId
    */
    public function getRoleDefinitionId()
    {
        if (array_key_exists("roleDefinitionId", $this->_propDict)) {
            return $this->_propDict["roleDefinitionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleDefinitionId
    *
    * @param string $val The roleDefinitionId
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the scheduleInfo
    *
    * @return RequestSchedule|null The scheduleInfo
    */
    public function getScheduleInfo()
    {
        if (array_key_exists("scheduleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["scheduleInfo"], "\Beta\Microsoft\Graph\Model\RequestSchedule") || is_null($this->_propDict["scheduleInfo"])) {
                return $this->_propDict["scheduleInfo"];
            } else {
                $this->_propDict["scheduleInfo"] = new RequestSchedule($this->_propDict["scheduleInfo"]);
                return $this->_propDict["scheduleInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scheduleInfo
    *
    * @param RequestSchedule $val The scheduleInfo
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setScheduleInfo($val)
    {
        $this->_propDict["scheduleInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetScheduleId
    *
    * @return string|null The targetScheduleId
    */
    public function getTargetScheduleId()
    {
        if (array_key_exists("targetScheduleId", $this->_propDict)) {
            return $this->_propDict["targetScheduleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetScheduleId
    *
    * @param string $val The targetScheduleId
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setTargetScheduleId($val)
    {
        $this->_propDict["targetScheduleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the ticketInfo
    *
    * @return TicketInfo|null The ticketInfo
    */
    public function getTicketInfo()
    {
        if (array_key_exists("ticketInfo", $this->_propDict)) {
            if (is_a($this->_propDict["ticketInfo"], "\Beta\Microsoft\Graph\Model\TicketInfo") || is_null($this->_propDict["ticketInfo"])) {
                return $this->_propDict["ticketInfo"];
            } else {
                $this->_propDict["ticketInfo"] = new TicketInfo($this->_propDict["ticketInfo"]);
                return $this->_propDict["ticketInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the ticketInfo
    *
    * @param TicketInfo $val The ticketInfo
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setTicketInfo($val)
    {
        $this->_propDict["ticketInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the activatedUsing
    *
    * @return UnifiedRoleEligibilitySchedule|null The activatedUsing
    */
    public function getActivatedUsing()
    {
        if (array_key_exists("activatedUsing", $this->_propDict)) {
            if (is_a($this->_propDict["activatedUsing"], "\Beta\Microsoft\Graph\Model\UnifiedRoleEligibilitySchedule") || is_null($this->_propDict["activatedUsing"])) {
                return $this->_propDict["activatedUsing"];
            } else {
                $this->_propDict["activatedUsing"] = new UnifiedRoleEligibilitySchedule($this->_propDict["activatedUsing"]);
                return $this->_propDict["activatedUsing"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activatedUsing
    *
    * @param UnifiedRoleEligibilitySchedule $val The activatedUsing
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setActivatedUsing($val)
    {
        $this->_propDict["activatedUsing"] = $val;
        return $this;
    }
    
    /**
    * Gets the appScope
    *
    * @return AppScope|null The appScope
    */
    public function getAppScope()
    {
        if (array_key_exists("appScope", $this->_propDict)) {
            if (is_a($this->_propDict["appScope"], "\Beta\Microsoft\Graph\Model\AppScope") || is_null($this->_propDict["appScope"])) {
                return $this->_propDict["appScope"];
            } else {
                $this->_propDict["appScope"] = new AppScope($this->_propDict["appScope"]);
                return $this->_propDict["appScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appScope
    *
    * @param AppScope $val The appScope
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setAppScope($val)
    {
        $this->_propDict["appScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the directoryScope
    *
    * @return DirectoryObject|null The directoryScope
    */
    public function getDirectoryScope()
    {
        if (array_key_exists("directoryScope", $this->_propDict)) {
            if (is_a($this->_propDict["directoryScope"], "\Beta\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["directoryScope"])) {
                return $this->_propDict["directoryScope"];
            } else {
                $this->_propDict["directoryScope"] = new DirectoryObject($this->_propDict["directoryScope"]);
                return $this->_propDict["directoryScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the directoryScope
    *
    * @param DirectoryObject $val The directoryScope
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setDirectoryScope($val)
    {
        $this->_propDict["directoryScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the principal
    *
    * @return DirectoryObject|null The principal
    */
    public function getPrincipal()
    {
        if (array_key_exists("principal", $this->_propDict)) {
            if (is_a($this->_propDict["principal"], "\Beta\Microsoft\Graph\Model\DirectoryObject") || is_null($this->_propDict["principal"])) {
                return $this->_propDict["principal"];
            } else {
                $this->_propDict["principal"] = new DirectoryObject($this->_propDict["principal"]);
                return $this->_propDict["principal"];
            }
        }
        return null;
    }
    
    /**
    * Sets the principal
    *
    * @param DirectoryObject $val The principal
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setPrincipal($val)
    {
        $this->_propDict["principal"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinition
    *
    * @return UnifiedRoleDefinition|null The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "\Beta\Microsoft\Graph\Model\UnifiedRoleDefinition") || is_null($this->_propDict["roleDefinition"])) {
                return $this->_propDict["roleDefinition"];
            } else {
                $this->_propDict["roleDefinition"] = new UnifiedRoleDefinition($this->_propDict["roleDefinition"]);
                return $this->_propDict["roleDefinition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleDefinition
    *
    * @param UnifiedRoleDefinition $val The roleDefinition
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetSchedule
    *
    * @return UnifiedRoleAssignmentSchedule|null The targetSchedule
    */
    public function getTargetSchedule()
    {
        if (array_key_exists("targetSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["targetSchedule"], "\Beta\Microsoft\Graph\Model\UnifiedRoleAssignmentSchedule") || is_null($this->_propDict["targetSchedule"])) {
                return $this->_propDict["targetSchedule"];
            } else {
                $this->_propDict["targetSchedule"] = new UnifiedRoleAssignmentSchedule($this->_propDict["targetSchedule"]);
                return $this->_propDict["targetSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetSchedule
    *
    * @param UnifiedRoleAssignmentSchedule $val The targetSchedule
    *
    * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function setTargetSchedule($val)
    {
        $this->_propDict["targetSchedule"] = $val;
        return $this;
    }
    
}
