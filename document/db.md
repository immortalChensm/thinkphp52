## DB 注解  
- 静态调用的骚操作     
 数据库配置参数初始化  
 ![call static](images/db/init2.png)  
 
 静态调用
![call static](images/db/init1.png)  
![call static](images/db/init3.png)    

这里返回的是  
![call static](images/db/mysql.png)  
![call static](images/db/mysql1.png)  
![call static](images/db/mysql2.png)  
![call static](images/db/mysql3.png)  


![call static](images/db/init4.png)  

最终实例化这查询构造器实例  
![call static](images/db/init5.png)  
![call static](images/db/init6.png)   
![call static](images/db/init7.png)    

- Db()::table()->find()    
经历了如下流程  
 
![call static](images/db/find1.png) 
![call static](images/db/find2.png) 
![call static](images/db/find3.png) 
![call static](images/db/find4.png) 
![call static](images/db/find5.png) 
![call static](images/db/find6.png) 
![call static](images/db/find7.png) 
![call static](images/db/find8.png) 
![call static](images/db/find9.png) 
![call static](images/db/find10.png) 

