<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirement
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement
 */
class FHIRDataRequirement extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT;
    const FIELD_CODE_FILTER = 'codeFilter';
    const FIELD_DATE_FILTER = 'dateFilter';
    const FIELD_LIMIT = 'limit';
    const FIELD_LIMIT_EXT = '_limit';
    const FIELD_MUST_SUPPORT = 'mustSupport';
    const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_SORT = 'sort';
    const FIELD_SUBJECT_CODEABLE_CONCEPT = 'subjectCodeableConcept';
    const FIELD_SUBJECT_REFERENCE = 'subjectReference';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    protected $codeFilter = [];

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    protected $dateFilter = [];

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a maximum number of results that are required (uses the _count search
     * parameter).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    protected $limit = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $mustSupport = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    protected $profile = [];

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort[]
     */
    protected $sort = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $subjectCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subjectReference = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    protected $type = null;

    /**
     * Validation map for fields in type DataRequirement
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDataRequirement Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirement::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE_FILTER])) {
            if (is_array($data[self::FIELD_CODE_FILTER])) {
                foreach($data[self::FIELD_CODE_FILTER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDataRequirementCodeFilter) {
                        $this->addCodeFilter($v);
                    } else {
                        $this->addCodeFilter(new FHIRDataRequirementCodeFilter($v));
                    }
                }
            } else if ($data[self::FIELD_CODE_FILTER] instanceof FHIRDataRequirementCodeFilter) {
                $this->addCodeFilter($data[self::FIELD_CODE_FILTER]);
            } else {
                $this->addCodeFilter(new FHIRDataRequirementCodeFilter($data[self::FIELD_CODE_FILTER]));
            }
        }
        if (isset($data[self::FIELD_DATE_FILTER])) {
            if (is_array($data[self::FIELD_DATE_FILTER])) {
                foreach($data[self::FIELD_DATE_FILTER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDataRequirementDateFilter) {
                        $this->addDateFilter($v);
                    } else {
                        $this->addDateFilter(new FHIRDataRequirementDateFilter($v));
                    }
                }
            } else if ($data[self::FIELD_DATE_FILTER] instanceof FHIRDataRequirementDateFilter) {
                $this->addDateFilter($data[self::FIELD_DATE_FILTER]);
            } else {
                $this->addDateFilter(new FHIRDataRequirementDateFilter($data[self::FIELD_DATE_FILTER]));
            }
        }
        if (isset($data[self::FIELD_LIMIT]) || isset($data[self::FIELD_LIMIT_EXT])) {
            if (isset($data[self::FIELD_LIMIT])) {
                $value = $data[self::FIELD_LIMIT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LIMIT_EXT]) && is_array($data[self::FIELD_LIMIT_EXT])) {
                $ext = $data[self::FIELD_LIMIT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setLimit($value);
                } else if (is_array($value)) {
                    $this->setLimit(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setLimit(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLimit(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_MUST_SUPPORT]) || isset($data[self::FIELD_MUST_SUPPORT_EXT])) {
            if (isset($data[self::FIELD_MUST_SUPPORT])) {
                $value = $data[self::FIELD_MUST_SUPPORT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT])) {
                $ext = $data[self::FIELD_MUST_SUPPORT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addMustSupport($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addMustSupport($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addMustSupport(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addMustSupport(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addMustSupport(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addMustSupport(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PROFILE]) || isset($data[self::FIELD_PROFILE_EXT])) {
            if (isset($data[self::FIELD_PROFILE])) {
                $value = $data[self::FIELD_PROFILE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])) {
                $ext = $data[self::FIELD_PROFILE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addProfile($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addProfile($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProfile(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProfile(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProfile(new FHIRCanonical($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SORT])) {
            if (is_array($data[self::FIELD_SORT])) {
                foreach($data[self::FIELD_SORT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDataRequirementSort) {
                        $this->addSort($v);
                    } else {
                        $this->addSort(new FHIRDataRequirementSort($v));
                    }
                }
            } else if ($data[self::FIELD_SORT] instanceof FHIRDataRequirementSort) {
                $this->addSort($data[self::FIELD_SORT]);
            } else {
                $this->addSort(new FHIRDataRequirementSort($data[self::FIELD_SORT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setSubjectCodeableConcept($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT]);
            } else {
                $this->setSubjectCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_SUBJECT_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_REFERENCE])) {
            if ($data[self::FIELD_SUBJECT_REFERENCE] instanceof FHIRReference) {
                $this->setSubjectReference($data[self::FIELD_SUBJECT_REFERENCE]);
            } else {
                $this->setSubjectReference(new FHIRReference($data[self::FIELD_SUBJECT_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            if (isset($data[self::FIELD_TYPE])) {
                $value = $data[self::FIELD_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) {
                $ext = $data[self::FIELD_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setType(new FHIRCode($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<DataRequirement{$xmlns}></DataRequirement>";
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[]
     */
    public function getCodeFilter()
    {
        return $this->codeFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $codeFilter
     * @return static
     */
    public function addCodeFilter(FHIRDataRequirementCodeFilter $codeFilter = null)
    {
        $this->codeFilter[] = $codeFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data. Each code filter defines
     * an additional constraint on the data, i.e. code filters are AND'ed, not OR'ed.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter[] $codeFilter
     * @return static
     */
    public function setCodeFilter(array $codeFilter = [])
    {
        $this->codeFilter = [];
        if ([] === $codeFilter) {
            return $this;
        }
        foreach($codeFilter as $v) {
            if ($v instanceof FHIRDataRequirementCodeFilter) {
                $this->addCodeFilter($v);
            } else {
                $this->addCodeFilter(new FHIRDataRequirementCodeFilter($v));
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[]
     */
    public function getDateFilter()
    {
        return $this->dateFilter;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $dateFilter
     * @return static
     */
    public function addDateFilter(FHIRDataRequirementDateFilter $dateFilter = null)
    {
        $this->dateFilter[] = $dateFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements. Each date filter specifies an
     * additional constraint on the data, i.e. date filters are AND'ed, not OR'ed.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter[] $dateFilter
     * @return static
     */
    public function setDateFilter(array $dateFilter = [])
    {
        $this->dateFilter = [];
        if ([] === $dateFilter) {
            return $this;
        }
        foreach($dateFilter as $v) {
            if ($v instanceof FHIRDataRequirementDateFilter) {
                $this->addDateFilter($v);
            } else {
                $this->addDateFilter(new FHIRDataRequirementDateFilter($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a maximum number of results that are required (uses the _count search
     * parameter).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a maximum number of results that are required (uses the _count search
     * parameter).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $limit
     * @return static
     */
    public function setLimit($limit = null)
    {
        if (null === $limit) {
            $this->limit = null;
            return $this;
        }
        if ($limit instanceof FHIRPositiveInt) {
            $this->limit = $limit;
            return $this;
        }
        $this->limit = new FHIRPositiveInt($limit);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $mustSupport
     * @return static
     */
    public function addMustSupport($mustSupport = null)
    {
        if (null === $mustSupport) {
            $this->mustSupport = [];
            return $this;
        }
        if ($mustSupport instanceof FHIRString) {
            $this->mustSupport[] = $mustSupport;
            return $this;
        }
        $this->mustSupport[] = new FHIRString($mustSupport);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. The value of mustSupport SHALL be a
     * FHIRPath resolveable on the type of the DataRequirement. The path SHALL consist
     * only of identifiers, constant indexers, and .resolve() (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $mustSupport
     * @return static
     */
    public function setMustSupport(array $mustSupport = [])
    {
        $this->mustSupport = [];
        if ([] === $mustSupport) {
            return $this;
        }
        foreach($mustSupport as $v) {
            if ($v instanceof FHIRString) {
                $this->addMustSupport($v);
            } else {
                $this->addMustSupport(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $profile
     * @return static
     */
    public function addProfile($profile = null)
    {
        if (null === $profile) {
            $this->profile = [];
            return $this;
        }
        if ($profile instanceof FHIRCanonical) {
            $this->profile[] = $profile;
            return $this;
        }
        $this->profile[] = new FHIRCanonical($profile);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $profile
     * @return static
     */
    public function setProfile(array $profile = [])
    {
        $this->profile = [];
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addProfile($v);
            } else {
                $this->addProfile(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort[]
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort $sort
     * @return static
     */
    public function addSort(FHIRDataRequirementSort $sort = null)
    {
        $this->sort[] = $sort;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the order of the results to be returned.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort[] $sort
     * @return static
     */
    public function setSort(array $sort = [])
    {
        $this->sort = [];
        if ([] === $sort) {
            return $this;
        }
        foreach($sort as $v) {
            if ($v instanceof FHIRDataRequirementSort) {
                $this->addSort($v);
            } else {
                $this->addSort(new FHIRDataRequirementSort($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $subjectCodeableConcept
     * @return static
     */
    public function setSubjectCodeableConcept(FHIRCodeableConcept $subjectCodeableConcept = null)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended subjects of the data requirement. If this element is not provided,
     * a Patient subject is assumed. (choose any one of subject*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subjectReference
     * @return static
     */
    public function setSubjectReference(FHIRReference $subjectReference = null)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $type
     * @return static
     */
    public function setType($type = null)
    {
        if (null === $type) {
            $this->type = null;
            return $this;
        }
        if ($type instanceof FHIRCode) {
            $this->type = $type;
            return $this;
        }
        $this->type = new FHIRCode($type);
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getCodeFilter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE_FILTER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATE_FILTER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLimit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIMIT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MUST_SUPPORT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSort())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SORT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubjectReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CODE_FILTER])) {
            $v = $this->getCodeFilter();
            foreach($validationRules[self::FIELD_CODE_FILTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_CODE_FILTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_FILTER])) {
                        $errs[self::FIELD_CODE_FILTER] = [];
                    }
                    $errs[self::FIELD_CODE_FILTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_FILTER])) {
            $v = $this->getDateFilter();
            foreach($validationRules[self::FIELD_DATE_FILTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_DATE_FILTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_FILTER])) {
                        $errs[self::FIELD_DATE_FILTER] = [];
                    }
                    $errs[self::FIELD_DATE_FILTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIMIT])) {
            $v = $this->getLimit();
            foreach($validationRules[self::FIELD_LIMIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_LIMIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIMIT])) {
                        $errs[self::FIELD_LIMIT] = [];
                    }
                    $errs[self::FIELD_LIMIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MUST_SUPPORT])) {
            $v = $this->getMustSupport();
            foreach($validationRules[self::FIELD_MUST_SUPPORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_MUST_SUPPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MUST_SUPPORT])) {
                        $errs[self::FIELD_MUST_SUPPORT] = [];
                    }
                    $errs[self::FIELD_MUST_SUPPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SORT])) {
            $v = $this->getSort();
            foreach($validationRules[self::FIELD_SORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_SORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SORT])) {
                        $errs[self::FIELD_SORT] = [];
                    }
                    $errs[self::FIELD_SORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
            $v = $this->getSubjectCodeableConcept();
            foreach($validationRules[self::FIELD_SUBJECT_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_SUBJECT_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_SUBJECT_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_REFERENCE])) {
            $v = $this->getSubjectReference();
            foreach($validationRules[self::FIELD_SUBJECT_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_SUBJECT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_REFERENCE])) {
                        $errs[self::FIELD_SUBJECT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SUBJECT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDataRequirement::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDataRequirement::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDataRequirement;
        } elseif (!is_object($type) || !($type instanceof FHIRDataRequirement)) {
            throw new \RuntimeException(sprintf(
                'FHIRDataRequirement::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->codeFilter)) {
            foreach($children->codeFilter as $child) {
                $type->addCodeFilter(FHIRDataRequirementCodeFilter::xmlUnserialize($child));
            }
        }
        if (isset($children->dateFilter)) {
            foreach($children->dateFilter as $child) {
                $type->addDateFilter(FHIRDataRequirementDateFilter::xmlUnserialize($child));
            }
        }
        if (isset($children->limit)) {
            $type->setLimit(FHIRPositiveInt::xmlUnserialize($children->limit));
        }
        if (isset($attributes->limit)) {
            $pt = $type->getLimit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->limit);
            } else {
                $type->setLimit((string)$attributes->limit);
            }
        }
        if (isset($children->mustSupport)) {
            foreach($children->mustSupport as $child) {
                $type->addMustSupport(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->profile)) {
            foreach($children->profile as $child) {
                $type->addProfile(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($children->sort)) {
            foreach($children->sort as $child) {
                $type->addSort(FHIRDataRequirementSort::xmlUnserialize($child));
            }
        }
        if (isset($children->subjectCodeableConcept)) {
            $type->setSubjectCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->subjectCodeableConcept));
        }
        if (isset($children->subjectReference)) {
            $type->setSubjectReference(FHIRReference::xmlUnserialize($children->subjectReference));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCode::xmlUnserialize($children->type));
        }
        if (isset($attributes->type)) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->type);
            } else {
                $type->setType((string)$attributes->type);
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if ([] !== ($vs = $this->getCodeFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE_FILTER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_FILTER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLimit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LIMIT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MUST_SUPPORT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSort())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SORT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCodeFilter())) {
            $a[self::FIELD_CODE_FILTER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CODE_FILTER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getDateFilter())) {
            $a[self::FIELD_DATE_FILTER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DATE_FILTER][] = $v;
            }
        }
        if (null !== ($v = $this->getLimit())) {
            $a[self::FIELD_LIMIT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_LIMIT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getMustSupport())) {
            $a[self::FIELD_MUST_SUPPORT] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MUST_SUPPORT][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_MUST_SUPPORT_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROFILE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCanonical::FIELD_VALUE]) || array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCanonical::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_PROFILE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getSort())) {
            $a[self::FIELD_SORT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SORT][] = $v;
            }
        }
        if (null !== ($v = $this->getSubjectCodeableConcept())) {
            $a[self::FIELD_SUBJECT_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getSubjectReference())) {
            $a[self::FIELD_SUBJECT_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}