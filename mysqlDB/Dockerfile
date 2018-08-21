FROM mysql:5.7
MAINTAINER Veerendra Kakumanu
COPY employees.sql /docker-entrypoint-initdb.d/employees.sql
ADD https://raw.githubusercontent.com/datacharmer/test_db/master/load_departments.dump /docker-entrypoint-initdb.d/
ADD https://raw.githubusercontent.com/datacharmer/test_db/master/load_employees.dump /docker-entrypoint-initdb.d/
ADD https://raw.githubusercontent.com/datacharmer/test_db/master/load_dept_emp.dump /docker-entrypoint-initdb.d/
ADD https://raw.githubusercontent.com/datacharmer/test_db/master/load_dept_manager.dump /docker-entrypoint-initdb.d/
ADD https://raw.githubusercontent.com/datacharmer/test_db/master/load_titles.dump /docker-entrypoint-initdb.d/
ADD https://raw.githubusercontent.com/datacharmer/test_db/master/load_salaries2.dump /docker-entrypoint-initdb.d/
ADD https://raw.githubusercontent.com/datacharmer/test_db/master/load_salaries1.dump /docker-entrypoint-initdb.d/
ADD https://raw.githubusercontent.com/datacharmer/test_db/master/load_salaries3.dump /docker-entrypoint-initdb.d/
RUN chmod -R o+rw /docker-entrypoint-initdb.d