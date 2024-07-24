The program is designed for handling the data of and the relationships between 2
groups of real-world entities:
 1) borrowers
 2) resources

Borrowers 

2 tables handle borrower information:
    1) borrower - for data that should be relevant to all borrowers
    2) borrower_info - for data that may not pertain to every borrower

Borrowers may be placed into groups, which can be manipulated en masse. A third 
table stores group information:
    3) group
and a fourth stores the relationships between borrowers and groups (what borrowers
are a member of what group):
    4) borrower_group

Resources

3 tables handle resource information:
    1) resource - for resource-related data that should be relevant to all resources
    2) resource_info - for resource-related data that may not pertain to every resource
    3) library_info - for information that describes the resource's relationship with
    the library - e.g. where it is located in the library

A forth table contains the subject heading list (controlled thesaurus), which is to be 
searched for subject headings that relate to a resource:
    4) subject_heading
and another table stores the relationship between subject headings and resources:
    5) 


SITE MAP

