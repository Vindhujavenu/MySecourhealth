package com.example.secourhealth;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONObject;

import android.os.Bundle;
import android.preference.PreferenceManager;
import android.app.Activity;
import android.content.SharedPreferences;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class Usersendfeedback extends Activity {
	EditText e;
	Button b;
	String url="",lid;
	SharedPreferences sh;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_usersendfeedback);
		e=(EditText)findViewById(R.id.editText1);
		b=(Button)findViewById(R.id.button1);
		sh=PreferenceManager.getDefaultSharedPreferences(getApplicationContext());
		url=sh.getString("url", "")+"userfeedback.php";
		lid=sh.getString("lid", "");
		b.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View arg0) {
				// TODO Auto-generated method stub
				String feedback=e.getText().toString();
				Toast.makeText(getApplicationContext(), feedback, Toast.LENGTH_LONG).show();
				JSONObject json=new JSONObject();
				JSONParser jsonParser=new JSONParser();
				try
				{
					ArrayList<NameValuePair> para=new ArrayList<NameValuePair>();
					para.add(new BasicNameValuePair("lid", lid));
					para.add(new BasicNameValuePair("feedback", feedback));
					json=jsonParser.makeHttpRequest(url, "GET", para);
					String res=json.getString("status");
					if(res.equalsIgnoreCase("1"))
					{
						Toast.makeText(getApplicationContext(), "success", Toast.LENGTH_LONG).show();
				}
					else
					{
						Toast.makeText(getApplicationContext(), "failed", Toast.LENGTH_LONG).show();
					}
				
			}
				catch (Exception e) {
					// TODO: handle exception
					Toast.makeText(getApplicationContext(), e.toString(), Toast.LENGTH_LONG).show();
				}
			}
		});
	}

}
