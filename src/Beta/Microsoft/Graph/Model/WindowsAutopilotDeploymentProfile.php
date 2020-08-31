<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotDeploymentProfile File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* WindowsAutopilotDeploymentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAutopilotDeploymentProfile extends Entity
{
    /**
    * Gets the displayName
    * Name of the profile
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Name of the profile
    *
    * @param string $val The displayName
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the profile
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Description of the profile
    *
    * @param string $val The description
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the language
    * Language configured on the device
    *
    * @return string The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the language
    * Language configured on the device
    *
    * @param string $val The language
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Profile creation time
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Profile creation time
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Profile last modified time
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * Profile last modified time
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the outOfBoxExperienceSettings
    * Out of box experience setting
    *
    * @return OutOfBoxExperienceSettings The outOfBoxExperienceSettings
    */
    public function getOutOfBoxExperienceSettings()
    {
        if (array_key_exists("outOfBoxExperienceSettings", $this->_propDict)) {
            if (is_a($this->_propDict["outOfBoxExperienceSettings"], "Beta\Microsoft\Graph\Model\OutOfBoxExperienceSettings")) {
                return $this->_propDict["outOfBoxExperienceSettings"];
            } else {
                $this->_propDict["outOfBoxExperienceSettings"] = new OutOfBoxExperienceSettings($this->_propDict["outOfBoxExperienceSettings"]);
                return $this->_propDict["outOfBoxExperienceSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the outOfBoxExperienceSettings
    * Out of box experience setting
    *
    * @param OutOfBoxExperienceSettings $val The outOfBoxExperienceSettings
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setOutOfBoxExperienceSettings($val)
    {
        $this->_propDict["outOfBoxExperienceSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrollmentStatusScreenSettings
    * Enrollment status screen setting
    *
    * @return WindowsEnrollmentStatusScreenSettings The enrollmentStatusScreenSettings
    */
    public function getEnrollmentStatusScreenSettings()
    {
        if (array_key_exists("enrollmentStatusScreenSettings", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentStatusScreenSettings"], "Beta\Microsoft\Graph\Model\WindowsEnrollmentStatusScreenSettings")) {
                return $this->_propDict["enrollmentStatusScreenSettings"];
            } else {
                $this->_propDict["enrollmentStatusScreenSettings"] = new WindowsEnrollmentStatusScreenSettings($this->_propDict["enrollmentStatusScreenSettings"]);
                return $this->_propDict["enrollmentStatusScreenSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrollmentStatusScreenSettings
    * Enrollment status screen setting
    *
    * @param WindowsEnrollmentStatusScreenSettings $val The enrollmentStatusScreenSettings
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setEnrollmentStatusScreenSettings($val)
    {
        $this->_propDict["enrollmentStatusScreenSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the extractHardwareHash
    * HardwareHash Extraction for the profile
    *
    * @return bool The extractHardwareHash
    */
    public function getExtractHardwareHash()
    {
        if (array_key_exists("extractHardwareHash", $this->_propDict)) {
            return $this->_propDict["extractHardwareHash"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the extractHardwareHash
    * HardwareHash Extraction for the profile
    *
    * @param bool $val The extractHardwareHash
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setExtractHardwareHash($val)
    {
        $this->_propDict["extractHardwareHash"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceNameTemplate
    * The template used to name the AutoPilot Device. This can be a custom text and can also contain either the serial number of the device, or a randomly generated number. The total length of the text generated by the template can be no more than 15 characters.
    *
    * @return string The deviceNameTemplate
    */
    public function getDeviceNameTemplate()
    {
        if (array_key_exists("deviceNameTemplate", $this->_propDict)) {
            return $this->_propDict["deviceNameTemplate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceNameTemplate
    * The template used to name the AutoPilot Device. This can be a custom text and can also contain either the serial number of the device, or a randomly generated number. The total length of the text generated by the template can be no more than 15 characters.
    *
    * @param string $val The deviceNameTemplate
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setDeviceNameTemplate($val)
    {
        $this->_propDict["deviceNameTemplate"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceType
    * The AutoPilot device type that this profile is applicable to.
    *
    * @return WindowsAutopilotDeviceType The deviceType
    */
    public function getDeviceType()
    {
        if (array_key_exists("deviceType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceType"], "Beta\Microsoft\Graph\Model\WindowsAutopilotDeviceType")) {
                return $this->_propDict["deviceType"];
            } else {
                $this->_propDict["deviceType"] = new WindowsAutopilotDeviceType($this->_propDict["deviceType"]);
                return $this->_propDict["deviceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceType
    * The AutoPilot device type that this profile is applicable to.
    *
    * @param WindowsAutopilotDeviceType $val The deviceType
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setDeviceType($val)
    {
        $this->_propDict["deviceType"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableWhiteGlove
    * Enable Autopilot White Glove for the profile.
    *
    * @return bool The enableWhiteGlove
    */
    public function getEnableWhiteGlove()
    {
        if (array_key_exists("enableWhiteGlove", $this->_propDict)) {
            return $this->_propDict["enableWhiteGlove"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableWhiteGlove
    * Enable Autopilot White Glove for the profile.
    *
    * @param bool $val The enableWhiteGlove
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setEnableWhiteGlove($val)
    {
        $this->_propDict["enableWhiteGlove"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * Scope tags for the profile.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * Scope tags for the profile.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignedDevices
    * The list of assigned devices for the profile.
     *
     * @return array The assignedDevices
     */
    public function getAssignedDevices()
    {
        if (array_key_exists("assignedDevices", $this->_propDict)) {
           return $this->_propDict["assignedDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedDevices
    * The list of assigned devices for the profile.
    *
    * @param WindowsAutopilotDeviceIdentity $val The assignedDevices
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setAssignedDevices($val)
    {
		$this->_propDict["assignedDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of group assignments for the profile.
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    * The list of group assignments for the profile.
    *
    * @param WindowsAutopilotDeploymentProfileAssignment $val The assignments
    *
    * @return WindowsAutopilotDeploymentProfile
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}