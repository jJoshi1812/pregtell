
# coding: utf-8

# In[1]:


import pandas as pd
import numpy as np


# In[2]:


df = pd.read_csv('dataset.csv')
df.fillna(df.mean())


# In[3]:


cat_vars=['tt1','tt2','urine','urine_albumin','urine_sugar','body_swelling','DIB','bodypain','vomate','fever']
for var in cat_vars:    
    cat_list='var'+'_'+var    
    cat_list = pd.get_dummies(df[var], prefix=var)    
    df1=df.join(cat_list, lsuffix='_left', rsuffix='_right')    
    df=df1


# In[4]:



df.loc[:, ~df.columns.str.contains('^Unnamed: 29')]
df1 = df.drop(df.columns[df.columns.str.contains('Unnamed: 29',case = False)],axis = 1)


# In[5]:


cat_vars=['tt1','tt2','urine','urine_albumin','urine_sugar','body_swelling','DIB','bodypain','vomate','fever']
df_vars=df1.columns.values.tolist()
to_keep=[i for i in df_vars if i not in cat_vars]


# In[6]:


df_final=df1[to_keep]


# In[7]:


df_final_vars=df_final.columns.values.tolist()
Y=['risk'] 
X=[i for i in df_final_vars if i not in Y ]


# In[8]:


from sklearn import datasets 
from sklearn.feature_selection import RFE 
from sklearn.linear_model import LogisticRegression
model = LogisticRegression()
rfe = RFE(model, 12) 
rfe = rfe.fit(df_final[X],df_final[Y] ) 


# In[9]:


cols=['bmi', 'tab_folic_acid_quantity', 'stomach_height',  'tt1_No', 'urine_albumin_No', 'DIB_Yes', 'bodypain_No','bodypain_Yes', 'vomate_No', 'vomate_Yes', 'fever_No', 'fever_Yes']
X = df_final[cols]
Y = df_final['risk']


# In[13]:





# In[15]:


from sklearn.model_selection import train_test_split
X_train, X_test, Y_train, Y_test = train_test_split(X, Y, test_size=0.3, random_state=0)


# In[16]:


from sklearn import linear_model 
from sklearn import metrics 
clf1 = linear_model.LogisticRegression() 
clf1.fit(X_train, Y_train)


# In[17]:


probs = clf1.predict_proba(X_test)


# In[18]:

formdata = pd.read_csv('data.csv',header=None)
predicted = clf1.predict(formdata.values)


# In[19]:


from sklearn.model_selection import cross_val_score 
scores = cross_val_score(linear_model.LogisticRegression(), X, Y, scoring='accuracy', cv=8) 

print(predicted)